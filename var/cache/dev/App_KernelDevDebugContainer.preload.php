<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerC8nQOIy\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerC8nQOIy/EntityManager_9a5be93.php';
require __DIR__.'/ContainerC8nQOIy/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerC8nQOIy/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerC8nQOIy/getSession_FactoryService.php';
require __DIR__.'/ContainerC8nQOIy/getServicesResetterService.php';
require __DIR__.'/ContainerC8nQOIy/getSecrets_VaultService.php';
require __DIR__.'/ContainerC8nQOIy/getRouting_LoaderService.php';
require __DIR__.'/ContainerC8nQOIy/getPropertyAccessorService.php';
require __DIR__.'/ContainerC8nQOIy/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerC8nQOIy/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerC8nQOIy/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerC8nQOIy/getForm_Type_FormService.php';
require __DIR__.'/ContainerC8nQOIy/getForm_Type_EntityService.php';
require __DIR__.'/ContainerC8nQOIy/getForm_Type_ColorService.php';
require __DIR__.'/ContainerC8nQOIy/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerC8nQOIy/getForm_RegistryService.php';
require __DIR__.'/ContainerC8nQOIy/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerC8nQOIy/getErrorControllerService.php';
require __DIR__.'/ContainerC8nQOIy/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerC8nQOIy/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerC8nQOIy/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerC8nQOIy/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerC8nQOIy/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerC8nQOIy/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerC8nQOIy/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerC8nQOIy/getDoctrine_Orm_DefaultAnnotationMetadataDriverService.php';
require __DIR__.'/ContainerC8nQOIy/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerC8nQOIy/getDoctrineService.php';
require __DIR__.'/ContainerC8nQOIy/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerC8nQOIy/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerC8nQOIy/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerC8nQOIy/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerC8nQOIy/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerC8nQOIy/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerC8nQOIy/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerC8nQOIy/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerC8nQOIy/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerC8nQOIy/getCache_SystemClearerService.php';
require __DIR__.'/ContainerC8nQOIy/getCache_SystemService.php';
require __DIR__.'/ContainerC8nQOIy/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerC8nQOIy/getCache_AppClearerService.php';
require __DIR__.'/ContainerC8nQOIy/getCache_AppService.php';
require __DIR__.'/ContainerC8nQOIy/getAnnotations_ReaderService.php';
require __DIR__.'/ContainerC8nQOIy/getAnnotations_CachedReaderService.php';
require __DIR__.'/ContainerC8nQOIy/getTemplateControllerService.php';
require __DIR__.'/ContainerC8nQOIy/getRedirectControllerService.php';
require __DIR__.'/ContainerC8nQOIy/getUserRepositoryService.php';
require __DIR__.'/ContainerC8nQOIy/getExperienceRepositoryService.php';
require __DIR__.'/ContainerC8nQOIy/getUserControllerService.php';
require __DIR__.'/ContainerC8nQOIy/getExperienceControllerService.php';
require __DIR__.'/ContainerC8nQOIy/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerC8nQOIy/get_ServiceLocator_ZxMugcLService.php';
require __DIR__.'/ContainerC8nQOIy/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerC8nQOIy/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerC8nQOIy/get_ServiceLocator_GNc8e5BService.php';
require __DIR__.'/ContainerC8nQOIy/get_Container_Private_TwigService.php';
require __DIR__.'/ContainerC8nQOIy/get_Container_Private_SessionService.php';
require __DIR__.'/ContainerC8nQOIy/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerC8nQOIy/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerC8nQOIy/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerC8nQOIy/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\ExperienceController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Repository\ExperienceRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
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
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Common\Cache\CacheProvider';
$classes[] = 'Doctrine\Common\Cache\Psr6\DoctrineProvider';
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
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
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
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/twig/4b/4b52bce48c2cbfb91bff5a4079de420802aa1bbe1b92f482abb3800dea324793.php';
require_once __DIR__.'/twig/53/537646e5481682d3a95ccc63db28823ac66067135ba2ffb54dd88f5cba605a8a.php';
require_once __DIR__.'/twig/b0/b0fc09b2d50d7719827f7195cfcdfe23fc67c695d9b025e1f5e4292aa1e8056d.php';
require_once __DIR__.'/twig/ab/abd4d3a3c080cc3ee83d13e1e6837876ed5e3cc4fd34f576958216b4de72bd6d.php';
require_once __DIR__.'/twig/6f/6ffd968d708213bcfdfb9c38c2ddd7e297f706cd6ee3d9d524b571632477e125.php';
require_once __DIR__.'/twig/2d/2dd2f082c404466d858934ca724688adbe74a2f8e0547d8754589b6909ce9db3.php';
require_once __DIR__.'/twig/27/27e4faa4e07c6ce351d45446b538a22614aa7e5d9555e6cc351358a69d83bb4e.php';
require_once __DIR__.'/twig/c4/c4bc8a7d30b0467962dda0b89b9ef70050e2afb412f3eec8c616d20942157562.php';
require_once __DIR__.'/twig/04/0477287dacc68d6e7d046bd48bc64809f2b4b32ffe050481dd0e2f6596860492.php';
require_once __DIR__.'/twig/c8/c88164392a7597aab75f042beff1a777de45476049faeaac40c87f6378e8238b.php';
require_once __DIR__.'/twig/6c/6c473c3a547366fb0fa2a20c23380f15f1caa92dbb5ec4e417a6b7b60864f7ef.php';
require_once __DIR__.'/twig/6b/6bd80dea84842cf4e056174140f385f62d531b94f3d655e99a0f85f36747e92d.php';
require_once __DIR__.'/twig/98/9866419bd9ea30ca136b37481c9a57f057ac9893d6fa8bbb092e46227033ccdd.php';
require_once __DIR__.'/twig/8c/8c5f23a29c2a070a48703ace110389e29589168b6f093428e6d6146313af4628.php';
require_once __DIR__.'/twig/ab/ab4d42e5b6b79a06b6a1ba96046088d7ceacb6e9de035fa0016b8e4428b862dc.php';
require_once __DIR__.'/twig/0c/0ca4c9ebdcdf65eb4cf6e3ee3d549d2327d8d45b3ea1956abd68064ba3df89a5.php';
require_once __DIR__.'/twig/6f/6ff04d74150b9555df20ffb37dde22adb37ab6e479ea5f4066dfcbc8771e115a.php';
require_once __DIR__.'/twig/36/36f7c734af3ca6c87377ffce38c24f4eb9764f62e5ab2beb785eb064649f96c9.php';
require_once __DIR__.'/twig/41/41af77c4e2383635c9123bb4f26f47f7bffcfd2b9a273268b9baaff36661e71b.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Doctrine\\ORM\\Mapping\\Entity';
$classes[] = 'Doctrine\\ORM\\Mapping\\Id';
$classes[] = 'Doctrine\\ORM\\Mapping\\GeneratedValue';
$classes[] = 'Doctrine\\ORM\\Mapping\\Column';
$classes[] = 'Doctrine\\ORM\\Mapping\\ManyToOne';
$classes[] = 'Doctrine\\ORM\\Mapping\\Table';
$classes[] = 'Doctrine\\ORM\\Mapping\\OneToMany';
$preloaded = Preloader::preload($classes, $preloaded);
