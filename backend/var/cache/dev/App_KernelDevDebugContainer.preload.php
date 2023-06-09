<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerA9Rqfdx\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerA9Rqfdx/getSession_FactoryService.php';
require __DIR__.'/ContainerA9Rqfdx/getServicesResetterService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Listener_UserChecker_LoginService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Listener_UserChecker_ApiService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Firewall_Map_Context_LoginService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Firewall_Map_Context_ApiService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_EventDispatcher_LoginService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_EventDispatcher_ApiService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Authenticator_Jwt_ApiService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_Authenticator_JsonLogin_LoginService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecrets_VaultService.php';
require __DIR__.'/ContainerA9Rqfdx/getRouting_LoaderService.php';
require __DIR__.'/ContainerA9Rqfdx/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/ContainerA9Rqfdx/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/ContainerA9Rqfdx/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializer_TraceableRunsListenerService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializer_StopwatchSubscriberService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializer_SerializationContextFactoryService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializer_Metadata_TypedPropertiesDriverService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializer_IteratorHandlerService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializer_DoctrineProxySubscriberService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializer_DeserializationContextFactoryService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializer_DatetimeHandlerService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializer_ConstraintViolationHandlerService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializer_Cache_CacheClearerService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializer_ArrayCollectionHandlerService.php';
require __DIR__.'/ContainerA9Rqfdx/getJmsSerializerService.php';
require __DIR__.'/ContainerA9Rqfdx/getFosRest_ViewHandlerService.php';
require __DIR__.'/ContainerA9Rqfdx/getFosRest_Serializer_FormErrorHandlerService.php';
require __DIR__.'/ContainerA9Rqfdx/getErrorControllerService.php';
require __DIR__.'/ContainerA9Rqfdx/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerA9Rqfdx/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerA9Rqfdx/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerA9Rqfdx/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerA9Rqfdx/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerA9Rqfdx/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerA9Rqfdx/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerA9Rqfdx/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_Security_Firewall_Authenticator_LoginService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_Security_Firewall_Authenticator_ApiService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerA9Rqfdx/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerA9Rqfdx/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerA9Rqfdx/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerA9Rqfdx/getCache_SystemClearerService.php';
require __DIR__.'/ContainerA9Rqfdx/getCache_SystemService.php';
require __DIR__.'/ContainerA9Rqfdx/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerA9Rqfdx/getCache_AppClearerService.php';
require __DIR__.'/ContainerA9Rqfdx/getCache_AppService.php';
require __DIR__.'/ContainerA9Rqfdx/getTemplateControllerService.php';
require __DIR__.'/ContainerA9Rqfdx/getRedirectControllerService.php';
require __DIR__.'/ContainerA9Rqfdx/getUtilisateurRepositoryService.php';
require __DIR__.'/ContainerA9Rqfdx/getProductRepositoryService.php';
require __DIR__.'/ContainerA9Rqfdx/getFournisseurRepositoryService.php';
require __DIR__.'/ContainerA9Rqfdx/getCategoryRepositoryService.php';
require __DIR__.'/ContainerA9Rqfdx/getSecurityControllerService.php';
require __DIR__.'/ContainerA9Rqfdx/getProjetControllerService.php';
require __DIR__.'/ContainerA9Rqfdx/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_YK21mr_Service.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_RvHSqhbService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_P_OkWv8Service.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_ONU7l4gService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_Mx0UMmYService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_Gt2y_SkService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_ULnVBtxService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_RioGPIService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_RdVbGrJService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_NOLKZxqService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_Jhh_C5SService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_IhDAAJwService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_BV7GNzVService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_AUup8zuService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_7rWB9SGService.php';
require __DIR__.'/ContainerA9Rqfdx/get_ServiceLocator_0Fb1YCWService.php';
require __DIR__.'/ContainerA9Rqfdx/get_Container_Private_SessionService.php';
require __DIR__.'/ContainerA9Rqfdx/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerA9Rqfdx/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerA9Rqfdx/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'JMS\SerializerBundle\JMSSerializerBundle';
$classes[] = 'FOS\RestBundle\FOSRestBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Nelmio\CorsBundle\NelmioCorsBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\ProjetController';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Repository\CategoryRepository';
$classes[] = 'App\Repository\FournisseurRepository';
$classes[] = 'App\Repository\ProductRepository';
$classes[] = 'App\Repository\UtilisateurRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'FOS\RestBundle\EventListener\FormatListener';
$classes[] = 'FOS\RestBundle\Negotiation\FormatNegotiator';
$classes[] = 'FOS\RestBundle\Serializer\Normalizer\FormErrorHandler';
$classes[] = 'JMS\Serializer\Handler\FormErrorHandler';
$classes[] = 'FOS\RestBundle\View\ViewHandler';
$classes[] = 'FOS\RestBundle\Serializer\JMSSerializerAdapter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'JMS\Serializer\Serializer';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableMetadataFactory';
$classes[] = 'Metadata\MetadataFactory';
$classes[] = 'Metadata\Driver\LazyLoadingDriver';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableHandlerRegistry';
$classes[] = 'JMS\Serializer\Handler\LazyHandlerRegistry';
$classes[] = 'JMS\Serializer\Construction\DoctrineObjectConstructor';
$classes[] = 'JMS\Serializer\Construction\UnserializeObjectConstructor';
$classes[] = 'JMS\Serializer\Accessor\DefaultAccessorStrategy';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableEventDispatcher';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Handler\ArrayCollectionHandler';
$classes[] = 'JMS\SerializerBundle\Cache\CacheClearer';
$classes[] = 'JMS\Serializer\Handler\ConstraintViolationHandler';
$classes[] = 'JMS\Serializer\Handler\DateHandler';
$classes[] = 'JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory';
$classes[] = 'JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber';
$classes[] = 'JMS\Serializer\Handler\IteratorHandler';
$classes[] = 'Metadata\Cache\FileCache';
$classes[] = 'JMS\Serializer\Metadata\Driver\TypedPropertiesDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\DoctrineTypeDriver';
$classes[] = 'Metadata\Driver\DriverChain';
$classes[] = 'JMS\Serializer\Metadata\Driver\YamlDriver';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableFileLocator';
$classes[] = 'Metadata\Driver\FileLocator';
$classes[] = 'JMS\Serializer\Naming\SerializedNameAnnotationStrategy';
$classes[] = 'JMS\Serializer\Naming\CamelCaseNamingStrategy';
$classes[] = 'JMS\Serializer\Metadata\Driver\XmlDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\AnnotationDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\AttributeDriver\AttributeReader';
$classes[] = 'JMS\SerializerBundle\Serializer\StopwatchEventSubscriber';
$classes[] = 'JMS\SerializerBundle\Debug\RunsListener';
$classes[] = 'JMS\Serializer\Type\Parser';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener';
$classes[] = 'Nelmio\CorsBundle\EventListener\CorsListener';
$classes[] = 'Nelmio\CorsBundle\Options\Resolver';
$classes[] = 'Nelmio\CorsBundle\Options\ConfigProvider';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

$preloaded = Preloader::preload($classes);
