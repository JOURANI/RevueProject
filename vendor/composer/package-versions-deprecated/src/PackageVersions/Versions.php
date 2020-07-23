<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.8.2@7a8001fe2c9befad9d001bf54ef0b4a17d950d0f',
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.6@5f0470363ff042d0057006ae7acabc5d7b5252d5',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.1.0@0fb513842c78b43770597ef3c487cdf79d944db3',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.0@5458bdcf176f6a53292e3f0cc73f292d6302fb0f',
  'egulias/email-validator' => '2.1.18@cfa3d44471c7f5bfb684ac2b0da7114283d78441',
  'monolog/monolog' => '1.25.4@3022efff205e2448b560c833c6fbbf91c3139168',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.3.0@e878a14a65245fbe78f8080eba03b47c3b705651',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.5.6@b49f079d8a87a6e6dd434062085ff5a132af466b',
  'symfony/asset' => 'v4.4.10@d8a755baa015b8949a105b8288eeb0714d9b1b5f',
  'symfony/cache' => 'v4.4.10@e12aad53e6b9fa80a3ca1d043b6dde9449b4f924',
  'symfony/cache-contracts' => 'v2.1.3@9771a09d2e6b84ecb8c9f0a7dbc72ee92aeba009',
  'symfony/config' => 'v4.4.10@395f6e09e1dc6ac9c1a5eea3b7f44f7a820a5504',
  'symfony/console' => 'v4.4.10@326b064d804043005526f5a0494cfb49edb59bb0',
  'symfony/debug' => 'v4.4.10@28f92d08bb6d1fddf8158e02c194ad43870007e6',
  'symfony/dependency-injection' => 'v4.4.10@a37cc0a90fec178768aa5048fea9251efde591c5',
  'symfony/doctrine-bridge' => 'v4.4.10@01463555497ed8844a3b1511c5ff39dd226ccd0a',
  'symfony/dotenv' => 'v4.4.10@24d734ab97c7fb8b4fa10c64ee0c344f2badfcf0',
  'symfony/error-handler' => 'v4.4.10@0df9a23c0f9eddbb6682479fee6fd58b88add75b',
  'symfony/event-dispatcher' => 'v4.4.10@a5370aaa7807c7a439b21386661ffccf3dff2866',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.10@89f0e2c82d8c12975180f993383decbb810ad73e',
  'symfony/filesystem' => 'v4.4.10@b27f491309db5757816db672b256ea2e03677d30',
  'symfony/finder' => 'v4.4.10@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/flex' => 'v1.8.4@7df5a72c7664baab629ec33de7890e9e3996b51b',
  'symfony/form' => 'v4.4.10@d3d8ebb8525418161b862738c4cefe518e431ff3',
  'symfony/framework-bundle' => 'v4.4.10@7da157f220ed61f43506ce5dc0527437da08095e',
  'symfony/http-client' => 'v4.4.10@b141d8dd0c2dca86287e33c3dcab079a778ed479',
  'symfony/http-client-contracts' => 'v2.1.3@cd88921e9add61f2064c9c6b30de4f589db42962',
  'symfony/http-foundation' => 'v4.4.10@3adfbd7098c850b02d107330b7b9deacf2581578',
  'symfony/http-kernel' => 'v4.4.10@81d42148474e1852a333ed7a732f2a014af75430',
  'symfony/inflector' => 'v4.4.10@3330be44724db42f0aa493002ae63f5d29f8d5f7',
  'symfony/intl' => 'v4.4.10@42a07a917c4db30c671b545175e402053ff23ad0',
  'symfony/mailer' => 'v4.4.10@fd16ff23c18146be32b1ea51f6cc43dc505ce361',
  'symfony/mime' => 'v4.4.10@af8e69e7527f752ab0ef6e1b717bac3f7336b8c6',
  'symfony/monolog-bridge' => 'v4.4.10@beb70975af56acdd67f3add01970165954d577c5',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.10@73e1d0fe11ffceb7b7d4ca55b7381cd7ce0bac05',
  'symfony/orm-pack' => 'v1.1.0@7dd2ed9ba6d7af79f90bdc77522605d40463e533',
  'symfony/polyfill-intl-icu' => 'v1.17.1@7b5e03aeb88cc8b4b2b136e34b0fc0830e86cd4d',
  'symfony/polyfill-intl-idn' => 'v1.17.1@a57f8161502549a742a63c09f0a604997bf47027',
  'symfony/polyfill-mbstring' => 'v1.17.1@7110338d81ce1cbc3e273136e4574663627037a7',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.1@fa0837fe02d617d31fbb25f990655861bb27bd1a',
  'symfony/polyfill-php80' => 'v1.17.1@4a5b6bba3259902e386eb80dd1956181ee90b5b2',
  'symfony/process' => 'v4.4.10@c714958428a85c86ab97e3a0c96db4c4f381b7f5',
  'symfony/property-access' => 'v4.4.10@e6d51a8845b862835f5fcaf3c1030a50dc7cc70f',
  'symfony/property-info' => 'v4.4.10@9904ddd5a24777b744123148bfaedbd83ce66d24',
  'symfony/routing' => 'v4.4.10@0f557911dde75c2a9652b8097bd7c9f54507f646',
  'symfony/security-bundle' => 'v4.4.10@6c1e30e2755928313e5eb55af20f615ed9fec2a2',
  'symfony/security-core' => 'v4.4.10@16ab88e5692e3fc32ae4ad550a55fbced516203b',
  'symfony/security-csrf' => 'v4.4.10@8788f6d4c8555b34d6f32f42b996b937b473f6b3',
  'symfony/security-guard' => 'v4.4.10@699162c3a9fcceb5ec8bce35a3dc2fcb79c6751e',
  'symfony/security-http' => 'v4.4.10@4aab90c5797a4f2ee9d5cd91f5e884d1e21f431a',
  'symfony/serializer' => 'v4.4.10@a91ceee34fc690a824770085192ffdeaa4476a8c',
  'symfony/serializer-pack' => 'v1.0.3@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/service-contracts' => 'v2.1.3@58c7475e5457c5492c26cc740cc0ad7464be9442',
  'symfony/stopwatch' => 'v4.4.10@f51fb90df1154a7f75987198a9689e28f91e6a50',
  'symfony/translation' => 'v4.4.10@79d3ef9096a6a6047dbc69218b68c7b7f63193af',
  'symfony/translation-contracts' => 'v2.1.3@616a9773c853097607cf9dd6577d5b143ffdcd63',
  'symfony/twig-bridge' => 'v4.4.10@13a9659ebceea38814ef8fde6399e36760ea08ad',
  'symfony/twig-bundle' => 'v4.4.10@c83e606bdc54504a1b2bcd8807b5dd139187b4a4',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v4.4.10@2fae3378102cff29976ce9e35f6964c78fce02b6',
  'symfony/var-dumper' => 'v4.4.10@56b3aa5eab0ac6720dcd559fd1d590ce301594ac',
  'symfony/var-exporter' => 'v4.4.10@f311af6e44fefedbd4f1e23e97607ef0f917bfcc',
  'symfony/web-link' => 'v4.4.10@b862a104ef3a233b6f12fdbf6b57113308af79ff',
  'symfony/yaml' => 'v4.4.10@c2d2cc66e892322cfcc03f8f12f8340dbd7a3f8a',
  'twig/extra-bundle' => 'v3.0.4@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.0.4@582bdbdc173027ebfba3c93dc750a40b8f9ebc02',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => '1.4.3@7ebac50901eb4516816ac39100dba1759d843943',
  'doctrine/doctrine-fixtures-bundle' => '3.3.1@39defca57ee0949e1475c46177b30b6d1b732e8f',
  'nikic/php-parser' => 'v4.6.0@c346bbfafe2ff60680258b631afb730d186ed864',
  'symfony/browser-kit' => 'v4.4.10@f53310646af9901292488b2ff36e26ea10f545f5',
  'symfony/css-selector' => 'v4.4.10@afc26133a6fbdd4f8842e38893e0ee4685c7c94b',
  'symfony/debug-bundle' => 'v4.4.10@12a020d14b4f6f3a5cfb46cd83836b78be036210',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'v4.4.10@c18354d5a0bb84c945f6257c51b971d52f10c614',
  'symfony/maker-bundle' => 'v1.19.1@51c48ca9df84c16ed522a7781866900edf7c99f8',
  'symfony/phpunit-bridge' => 'v5.1.2@de5f0fec631a0cbfe98630b053be1fad7b75aece',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v4.4.10@e86d3e8d9230fddfee27017f3b8c5c868733079e',
  'symfony/web-server-bundle' => 'v4.4.10@d617765de8a65d4d42f1b2843c7df36645936216',
  'paragonie/random_compat' => '2.*@93c67abfd8f95bf52f61c01cfa843227e90afc5c',
  'symfony/polyfill-ctype' => '*@93c67abfd8f95bf52f61c01cfa843227e90afc5c',
  'symfony/polyfill-iconv' => '*@93c67abfd8f95bf52f61c01cfa843227e90afc5c',
  'symfony/polyfill-php71' => '*@93c67abfd8f95bf52f61c01cfa843227e90afc5c',
  'symfony/polyfill-php70' => '*@93c67abfd8f95bf52f61c01cfa843227e90afc5c',
  'symfony/polyfill-php56' => '*@93c67abfd8f95bf52f61c01cfa843227e90afc5c',
  '__root__' => 'dev-Y-Security@93c67abfd8f95bf52f61c01cfa843227e90afc5c',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
