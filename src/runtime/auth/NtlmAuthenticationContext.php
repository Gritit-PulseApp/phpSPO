<?php
namespace SharePoint\PHP\Client;
require_once('AuthenticationContext.php');

class NtlmAuthenticationContext extends AuthenticationContext
{

    /**
     * @var UserCredentials
     */
    private $userCredentials;

    public function __construct($url, $username, $password){
        parent::__construct($url);
        $this->userCredentials = new UserCredentials($username,$password);
    }

    public function authenticateRequest($options)
    {
        $options->AuthType = CURLAUTH_NTLM;
        $options->UserCredentials = $this->userCredentials;
    }


}