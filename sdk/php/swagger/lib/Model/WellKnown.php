<?php
/**
 * WellKnown
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hydra\SDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ORY Hydra
 *
 * Welcome to the ORY Hydra HTTP API documentation. You will find documentation for all HTTP APIs here.
 *
 * OpenAPI spec version: latest
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Hydra\SDK\Model;

use \ArrayAccess;

/**
 * WellKnown Class Doc Comment
 *
 * @category    Class
 * @description It includes links to several endpoints (e.g. /oauth2/token) and exposes information on supported signature algorithms among others.
 * @package     Hydra\SDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WellKnown implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'wellKnown';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authorization_endpoint' => 'string',
        'claims_parameter_supported' => 'bool',
        'claims_supported' => 'string[]',
        'grant_types_supported' => 'string[]',
        'id_token_signing_alg_values_supported' => 'string[]',
        'issuer' => 'string',
        'jwks_uri' => 'string',
        'registration_endpoint' => 'string',
        'request_parameter_supported' => 'bool',
        'request_uri_parameter_supported' => 'bool',
        'require_request_uri_registration' => 'bool',
        'response_modes_supported' => 'string[]',
        'response_types_supported' => 'string[]',
        'revocation_endpoint' => 'string',
        'scopes_supported' => 'string[]',
        'subject_types_supported' => 'string[]',
        'token_endpoint' => 'string',
        'token_endpoint_auth_methods_supported' => 'string[]',
        'userinfo_endpoint' => 'string',
        'userinfo_signing_alg_values_supported' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authorization_endpoint' => null,
        'claims_parameter_supported' => null,
        'claims_supported' => null,
        'grant_types_supported' => null,
        'id_token_signing_alg_values_supported' => null,
        'issuer' => null,
        'jwks_uri' => null,
        'registration_endpoint' => null,
        'request_parameter_supported' => null,
        'request_uri_parameter_supported' => null,
        'require_request_uri_registration' => null,
        'response_modes_supported' => null,
        'response_types_supported' => null,
        'revocation_endpoint' => null,
        'scopes_supported' => null,
        'subject_types_supported' => null,
        'token_endpoint' => null,
        'token_endpoint_auth_methods_supported' => null,
        'userinfo_endpoint' => null,
        'userinfo_signing_alg_values_supported' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'authorization_endpoint' => 'authorization_endpoint',
        'claims_parameter_supported' => 'claims_parameter_supported',
        'claims_supported' => 'claims_supported',
        'grant_types_supported' => 'grant_types_supported',
        'id_token_signing_alg_values_supported' => 'id_token_signing_alg_values_supported',
        'issuer' => 'issuer',
        'jwks_uri' => 'jwks_uri',
        'registration_endpoint' => 'registration_endpoint',
        'request_parameter_supported' => 'request_parameter_supported',
        'request_uri_parameter_supported' => 'request_uri_parameter_supported',
        'require_request_uri_registration' => 'require_request_uri_registration',
        'response_modes_supported' => 'response_modes_supported',
        'response_types_supported' => 'response_types_supported',
        'revocation_endpoint' => 'revocation_endpoint',
        'scopes_supported' => 'scopes_supported',
        'subject_types_supported' => 'subject_types_supported',
        'token_endpoint' => 'token_endpoint',
        'token_endpoint_auth_methods_supported' => 'token_endpoint_auth_methods_supported',
        'userinfo_endpoint' => 'userinfo_endpoint',
        'userinfo_signing_alg_values_supported' => 'userinfo_signing_alg_values_supported'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'authorization_endpoint' => 'setAuthorizationEndpoint',
        'claims_parameter_supported' => 'setClaimsParameterSupported',
        'claims_supported' => 'setClaimsSupported',
        'grant_types_supported' => 'setGrantTypesSupported',
        'id_token_signing_alg_values_supported' => 'setIdTokenSigningAlgValuesSupported',
        'issuer' => 'setIssuer',
        'jwks_uri' => 'setJwksUri',
        'registration_endpoint' => 'setRegistrationEndpoint',
        'request_parameter_supported' => 'setRequestParameterSupported',
        'request_uri_parameter_supported' => 'setRequestUriParameterSupported',
        'require_request_uri_registration' => 'setRequireRequestUriRegistration',
        'response_modes_supported' => 'setResponseModesSupported',
        'response_types_supported' => 'setResponseTypesSupported',
        'revocation_endpoint' => 'setRevocationEndpoint',
        'scopes_supported' => 'setScopesSupported',
        'subject_types_supported' => 'setSubjectTypesSupported',
        'token_endpoint' => 'setTokenEndpoint',
        'token_endpoint_auth_methods_supported' => 'setTokenEndpointAuthMethodsSupported',
        'userinfo_endpoint' => 'setUserinfoEndpoint',
        'userinfo_signing_alg_values_supported' => 'setUserinfoSigningAlgValuesSupported'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'authorization_endpoint' => 'getAuthorizationEndpoint',
        'claims_parameter_supported' => 'getClaimsParameterSupported',
        'claims_supported' => 'getClaimsSupported',
        'grant_types_supported' => 'getGrantTypesSupported',
        'id_token_signing_alg_values_supported' => 'getIdTokenSigningAlgValuesSupported',
        'issuer' => 'getIssuer',
        'jwks_uri' => 'getJwksUri',
        'registration_endpoint' => 'getRegistrationEndpoint',
        'request_parameter_supported' => 'getRequestParameterSupported',
        'request_uri_parameter_supported' => 'getRequestUriParameterSupported',
        'require_request_uri_registration' => 'getRequireRequestUriRegistration',
        'response_modes_supported' => 'getResponseModesSupported',
        'response_types_supported' => 'getResponseTypesSupported',
        'revocation_endpoint' => 'getRevocationEndpoint',
        'scopes_supported' => 'getScopesSupported',
        'subject_types_supported' => 'getSubjectTypesSupported',
        'token_endpoint' => 'getTokenEndpoint',
        'token_endpoint_auth_methods_supported' => 'getTokenEndpointAuthMethodsSupported',
        'userinfo_endpoint' => 'getUserinfoEndpoint',
        'userinfo_signing_alg_values_supported' => 'getUserinfoSigningAlgValuesSupported'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['authorization_endpoint'] = isset($data['authorization_endpoint']) ? $data['authorization_endpoint'] : null;
        $this->container['claims_parameter_supported'] = isset($data['claims_parameter_supported']) ? $data['claims_parameter_supported'] : null;
        $this->container['claims_supported'] = isset($data['claims_supported']) ? $data['claims_supported'] : null;
        $this->container['grant_types_supported'] = isset($data['grant_types_supported']) ? $data['grant_types_supported'] : null;
        $this->container['id_token_signing_alg_values_supported'] = isset($data['id_token_signing_alg_values_supported']) ? $data['id_token_signing_alg_values_supported'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['jwks_uri'] = isset($data['jwks_uri']) ? $data['jwks_uri'] : null;
        $this->container['registration_endpoint'] = isset($data['registration_endpoint']) ? $data['registration_endpoint'] : null;
        $this->container['request_parameter_supported'] = isset($data['request_parameter_supported']) ? $data['request_parameter_supported'] : null;
        $this->container['request_uri_parameter_supported'] = isset($data['request_uri_parameter_supported']) ? $data['request_uri_parameter_supported'] : null;
        $this->container['require_request_uri_registration'] = isset($data['require_request_uri_registration']) ? $data['require_request_uri_registration'] : null;
        $this->container['response_modes_supported'] = isset($data['response_modes_supported']) ? $data['response_modes_supported'] : null;
        $this->container['response_types_supported'] = isset($data['response_types_supported']) ? $data['response_types_supported'] : null;
        $this->container['revocation_endpoint'] = isset($data['revocation_endpoint']) ? $data['revocation_endpoint'] : null;
        $this->container['scopes_supported'] = isset($data['scopes_supported']) ? $data['scopes_supported'] : null;
        $this->container['subject_types_supported'] = isset($data['subject_types_supported']) ? $data['subject_types_supported'] : null;
        $this->container['token_endpoint'] = isset($data['token_endpoint']) ? $data['token_endpoint'] : null;
        $this->container['token_endpoint_auth_methods_supported'] = isset($data['token_endpoint_auth_methods_supported']) ? $data['token_endpoint_auth_methods_supported'] : null;
        $this->container['userinfo_endpoint'] = isset($data['userinfo_endpoint']) ? $data['userinfo_endpoint'] : null;
        $this->container['userinfo_signing_alg_values_supported'] = isset($data['userinfo_signing_alg_values_supported']) ? $data['userinfo_signing_alg_values_supported'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['authorization_endpoint'] === null) {
            $invalid_properties[] = "'authorization_endpoint' can't be null";
        }
        if ($this->container['id_token_signing_alg_values_supported'] === null) {
            $invalid_properties[] = "'id_token_signing_alg_values_supported' can't be null";
        }
        if ($this->container['issuer'] === null) {
            $invalid_properties[] = "'issuer' can't be null";
        }
        if ($this->container['jwks_uri'] === null) {
            $invalid_properties[] = "'jwks_uri' can't be null";
        }
        if ($this->container['response_types_supported'] === null) {
            $invalid_properties[] = "'response_types_supported' can't be null";
        }
        if ($this->container['subject_types_supported'] === null) {
            $invalid_properties[] = "'subject_types_supported' can't be null";
        }
        if ($this->container['token_endpoint'] === null) {
            $invalid_properties[] = "'token_endpoint' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['authorization_endpoint'] === null) {
            return false;
        }
        if ($this->container['id_token_signing_alg_values_supported'] === null) {
            return false;
        }
        if ($this->container['issuer'] === null) {
            return false;
        }
        if ($this->container['jwks_uri'] === null) {
            return false;
        }
        if ($this->container['response_types_supported'] === null) {
            return false;
        }
        if ($this->container['subject_types_supported'] === null) {
            return false;
        }
        if ($this->container['token_endpoint'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets authorization_endpoint
     * @return string
     */
    public function getAuthorizationEndpoint()
    {
        return $this->container['authorization_endpoint'];
    }

    /**
     * Sets authorization_endpoint
     * @param string $authorization_endpoint URL of the OP's OAuth 2.0 Authorization Endpoint.
     * @return $this
     */
    public function setAuthorizationEndpoint($authorization_endpoint)
    {
        $this->container['authorization_endpoint'] = $authorization_endpoint;

        return $this;
    }

    /**
     * Gets claims_parameter_supported
     * @return bool
     */
    public function getClaimsParameterSupported()
    {
        return $this->container['claims_parameter_supported'];
    }

    /**
     * Sets claims_parameter_supported
     * @param bool $claims_parameter_supported Boolean value specifying whether the OP supports use of the claims parameter, with true indicating support.
     * @return $this
     */
    public function setClaimsParameterSupported($claims_parameter_supported)
    {
        $this->container['claims_parameter_supported'] = $claims_parameter_supported;

        return $this;
    }

    /**
     * Gets claims_supported
     * @return string[]
     */
    public function getClaimsSupported()
    {
        return $this->container['claims_supported'];
    }

    /**
     * Sets claims_supported
     * @param string[] $claims_supported JSON array containing a list of the Claim Names of the Claims that the OpenID Provider MAY be able to supply values for. Note that for privacy or other reasons, this might not be an exhaustive list.
     * @return $this
     */
    public function setClaimsSupported($claims_supported)
    {
        $this->container['claims_supported'] = $claims_supported;

        return $this;
    }

    /**
     * Gets grant_types_supported
     * @return string[]
     */
    public function getGrantTypesSupported()
    {
        return $this->container['grant_types_supported'];
    }

    /**
     * Sets grant_types_supported
     * @param string[] $grant_types_supported JSON array containing a list of the OAuth 2.0 Grant Type values that this OP supports.
     * @return $this
     */
    public function setGrantTypesSupported($grant_types_supported)
    {
        $this->container['grant_types_supported'] = $grant_types_supported;

        return $this;
    }

    /**
     * Gets id_token_signing_alg_values_supported
     * @return string[]
     */
    public function getIdTokenSigningAlgValuesSupported()
    {
        return $this->container['id_token_signing_alg_values_supported'];
    }

    /**
     * Sets id_token_signing_alg_values_supported
     * @param string[] $id_token_signing_alg_values_supported JSON array containing a list of the JWS signing algorithms (alg values) supported by the OP for the ID Token to encode the Claims in a JWT.
     * @return $this
     */
    public function setIdTokenSigningAlgValuesSupported($id_token_signing_alg_values_supported)
    {
        $this->container['id_token_signing_alg_values_supported'] = $id_token_signing_alg_values_supported;

        return $this;
    }

    /**
     * Gets issuer
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     * @param string $issuer URL using the https scheme with no query or fragment component that the OP asserts as its IssuerURL Identifier. If IssuerURL discovery is supported , this value MUST be identical to the issuer value returned by WebFinger. This also MUST be identical to the iss Claim value in ID Tokens issued from this IssuerURL.
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets jwks_uri
     * @return string
     */
    public function getJwksUri()
    {
        return $this->container['jwks_uri'];
    }

    /**
     * Sets jwks_uri
     * @param string $jwks_uri URL of the OP's JSON Web Key Set [JWK] document. This contains the signing key(s) the RP uses to validate signatures from the OP. The JWK Set MAY also contain the Server's encryption key(s), which are used by RPs to encrypt requests to the Server. When both signing and encryption keys are made available, a use (Key Use) parameter value is REQUIRED for all keys in the referenced JWK Set to indicate each key's intended usage. Although some algorithms allow the same key to be used for both signatures and encryption, doing so is NOT RECOMMENDED, as it is less secure. The JWK x5c parameter MAY be used to provide X.509 representations of keys provided. When used, the bare key values MUST still be present and MUST match those in the certificate.
     * @return $this
     */
    public function setJwksUri($jwks_uri)
    {
        $this->container['jwks_uri'] = $jwks_uri;

        return $this;
    }

    /**
     * Gets registration_endpoint
     * @return string
     */
    public function getRegistrationEndpoint()
    {
        return $this->container['registration_endpoint'];
    }

    /**
     * Sets registration_endpoint
     * @param string $registration_endpoint URL of the OP's Dynamic Client Registration Endpoint.
     * @return $this
     */
    public function setRegistrationEndpoint($registration_endpoint)
    {
        $this->container['registration_endpoint'] = $registration_endpoint;

        return $this;
    }

    /**
     * Gets request_parameter_supported
     * @return bool
     */
    public function getRequestParameterSupported()
    {
        return $this->container['request_parameter_supported'];
    }

    /**
     * Sets request_parameter_supported
     * @param bool $request_parameter_supported Boolean value specifying whether the OP supports use of the request parameter, with true indicating support.
     * @return $this
     */
    public function setRequestParameterSupported($request_parameter_supported)
    {
        $this->container['request_parameter_supported'] = $request_parameter_supported;

        return $this;
    }

    /**
     * Gets request_uri_parameter_supported
     * @return bool
     */
    public function getRequestUriParameterSupported()
    {
        return $this->container['request_uri_parameter_supported'];
    }

    /**
     * Sets request_uri_parameter_supported
     * @param bool $request_uri_parameter_supported Boolean value specifying whether the OP supports use of the request_uri parameter, with true indicating support.
     * @return $this
     */
    public function setRequestUriParameterSupported($request_uri_parameter_supported)
    {
        $this->container['request_uri_parameter_supported'] = $request_uri_parameter_supported;

        return $this;
    }

    /**
     * Gets require_request_uri_registration
     * @return bool
     */
    public function getRequireRequestUriRegistration()
    {
        return $this->container['require_request_uri_registration'];
    }

    /**
     * Sets require_request_uri_registration
     * @param bool $require_request_uri_registration Boolean value specifying whether the OP requires any request_uri values used to be pre-registered using the request_uris registration parameter.
     * @return $this
     */
    public function setRequireRequestUriRegistration($require_request_uri_registration)
    {
        $this->container['require_request_uri_registration'] = $require_request_uri_registration;

        return $this;
    }

    /**
     * Gets response_modes_supported
     * @return string[]
     */
    public function getResponseModesSupported()
    {
        return $this->container['response_modes_supported'];
    }

    /**
     * Sets response_modes_supported
     * @param string[] $response_modes_supported JSON array containing a list of the OAuth 2.0 response_mode values that this OP supports.
     * @return $this
     */
    public function setResponseModesSupported($response_modes_supported)
    {
        $this->container['response_modes_supported'] = $response_modes_supported;

        return $this;
    }

    /**
     * Gets response_types_supported
     * @return string[]
     */
    public function getResponseTypesSupported()
    {
        return $this->container['response_types_supported'];
    }

    /**
     * Sets response_types_supported
     * @param string[] $response_types_supported JSON array containing a list of the OAuth 2.0 response_type values that this OP supports. Dynamic OpenID Providers MUST support the code, id_token, and the token id_token Response Type values.
     * @return $this
     */
    public function setResponseTypesSupported($response_types_supported)
    {
        $this->container['response_types_supported'] = $response_types_supported;

        return $this;
    }

    /**
     * Gets revocation_endpoint
     * @return string
     */
    public function getRevocationEndpoint()
    {
        return $this->container['revocation_endpoint'];
    }

    /**
     * Sets revocation_endpoint
     * @param string $revocation_endpoint URL of the authorization server's OAuth 2.0 revocation endpoint.
     * @return $this
     */
    public function setRevocationEndpoint($revocation_endpoint)
    {
        $this->container['revocation_endpoint'] = $revocation_endpoint;

        return $this;
    }

    /**
     * Gets scopes_supported
     * @return string[]
     */
    public function getScopesSupported()
    {
        return $this->container['scopes_supported'];
    }

    /**
     * Sets scopes_supported
     * @param string[] $scopes_supported SON array containing a list of the OAuth 2.0 [RFC6749] scope values that this server supports. The server MUST support the openid scope value. Servers MAY choose not to advertise some supported scope values even when this parameter is used
     * @return $this
     */
    public function setScopesSupported($scopes_supported)
    {
        $this->container['scopes_supported'] = $scopes_supported;

        return $this;
    }

    /**
     * Gets subject_types_supported
     * @return string[]
     */
    public function getSubjectTypesSupported()
    {
        return $this->container['subject_types_supported'];
    }

    /**
     * Sets subject_types_supported
     * @param string[] $subject_types_supported JSON array containing a list of the Subject Identifier types that this OP supports. Valid types include pairwise and public.
     * @return $this
     */
    public function setSubjectTypesSupported($subject_types_supported)
    {
        $this->container['subject_types_supported'] = $subject_types_supported;

        return $this;
    }

    /**
     * Gets token_endpoint
     * @return string
     */
    public function getTokenEndpoint()
    {
        return $this->container['token_endpoint'];
    }

    /**
     * Sets token_endpoint
     * @param string $token_endpoint URL of the OP's OAuth 2.0 Token Endpoint
     * @return $this
     */
    public function setTokenEndpoint($token_endpoint)
    {
        $this->container['token_endpoint'] = $token_endpoint;

        return $this;
    }

    /**
     * Gets token_endpoint_auth_methods_supported
     * @return string[]
     */
    public function getTokenEndpointAuthMethodsSupported()
    {
        return $this->container['token_endpoint_auth_methods_supported'];
    }

    /**
     * Sets token_endpoint_auth_methods_supported
     * @param string[] $token_endpoint_auth_methods_supported JSON array containing a list of Client Authentication methods supported by this Token Endpoint. The options are client_secret_post, client_secret_basic, client_secret_jwt, and private_key_jwt, as described in Section 9 of OpenID Connect Core 1.0
     * @return $this
     */
    public function setTokenEndpointAuthMethodsSupported($token_endpoint_auth_methods_supported)
    {
        $this->container['token_endpoint_auth_methods_supported'] = $token_endpoint_auth_methods_supported;

        return $this;
    }

    /**
     * Gets userinfo_endpoint
     * @return string
     */
    public function getUserinfoEndpoint()
    {
        return $this->container['userinfo_endpoint'];
    }

    /**
     * Sets userinfo_endpoint
     * @param string $userinfo_endpoint URL of the OP's UserInfo Endpoint.
     * @return $this
     */
    public function setUserinfoEndpoint($userinfo_endpoint)
    {
        $this->container['userinfo_endpoint'] = $userinfo_endpoint;

        return $this;
    }

    /**
     * Gets userinfo_signing_alg_values_supported
     * @return string[]
     */
    public function getUserinfoSigningAlgValuesSupported()
    {
        return $this->container['userinfo_signing_alg_values_supported'];
    }

    /**
     * Sets userinfo_signing_alg_values_supported
     * @param string[] $userinfo_signing_alg_values_supported JSON array containing a list of the JWS [JWS] signing algorithms (alg values) [JWA] supported by the UserInfo Endpoint to encode the Claims in a JWT [JWT].
     * @return $this
     */
    public function setUserinfoSigningAlgValuesSupported($userinfo_signing_alg_values_supported)
    {
        $this->container['userinfo_signing_alg_values_supported'] = $userinfo_signing_alg_values_supported;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Hydra\SDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Hydra\SDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}


