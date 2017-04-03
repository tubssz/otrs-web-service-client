<?php
namespace Otrs;

final class Client
{

    const DATE_FORMAT = 'Y-m-d H:i:s';

    const LOGIN_TYPE_USER = 'UserLogin';

    const LOGIN_TYPE_CUSTOMER_USER = 'CustomerUserLogin';

    /**
     *
     * @var string
     */
    private $baseUrl;

    /**
     *
     * @var string
     */
    private $username;

    /**
     *
     * @var string
     */
    private $password;

    /**
     *
     * @var string
     */
    private $webserviceName;

    /**
     *
     * @var string
     */
    private $webserviceNamespace;

    /**
     *
     * @var string
     */
    private $loginType;

    /**
     * Constructor.
     *
     * @param string $baseUrl
     * @param string $username
     * @param string $password
     * @param string $webserviceName
     * @param string $webserviceNamespace
     * @param string $loginType
     */
    public function __construct($baseUrl, $username, $password, $webserviceName, $webserviceNamespace, $loginType = self::LOGIN_TYPE_USER)
    {
        $this->baseUrl = $baseUrl;
        $this->username = $username;
        $this->password = $password;
        $this->webserviceName = $webserviceName;
        $this->webserviceNamespace = $webserviceNamespace;
        $this->loginType = $loginType;
    }

    /**
     * Call the SOAP endpoint.
     *
     * @param string $endpoint
     * @param array $data
     * @throws SoapFault
     * @return mixed
     */
    public function call($endpoint, $data)
    {
        $soapData = array();
        $soapData[] = new \SoapParam($this->username, $this->loginType);
        if (! is_null($this->password)) {
            $soapData[] = new \SoapParam($this->password, 'Password');
        }
        foreach ($data as $key => $value) {
            $soapData[] = new \SoapParam($value, $key);
        }
        try {
            $client = new \SoapClient(null, array(
                'location' => $this->baseUrl . '/nph-genericinterface.pl/Webservice/' . $this->webserviceName,
                'uri' => $this->webserviceNamespace,
                'trace' => 1,
                'style' => SOAP_RPC,
                'use' => SOAP_ENCODED
            ));
            $result = $client->__soapCall($endpoint, $soapData);
            unset($client);
            if ($result instanceof \stdClass && isset($result->ErrorCode)) {
                throw new \Exception($result->ErrorMessage);
            }
            return $result;
        } catch (\SoapFault $e) {
            unset($client);
            throw $e;
        }
    }
}