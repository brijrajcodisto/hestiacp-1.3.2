<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'filegator/filegator',
  ),
  'versions' => 
  array (
    'dg/dibi' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dibi/dibi' => 
    array (
      'pretty_version' => 'v4.1.3',
      'version' => '4.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ed2a82741993706c15dbd4f5b8dd7eb5b75f7aa2',
    ),
    'filegator/filegator' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'jeremeamia/superclosure' => 
    array (
      'pretty_version' => '2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5707d5821b30b9a07acfb4d76949784aaa0e9ce9',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.0.67',
      'version' => '1.0.67.0',
      'aliases' => 
      array (
      ),
      'reference' => '5b1f36c75c4bdde981294c2a0ebdb437ee6f275e',
    ),
    'league/flysystem-sftp' => 
    array (
      'pretty_version' => '1.0.22',
      'version' => '1.0.22.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cab59dd2277e02fe46f5f23195672a02ed49774d',
    ),
    'league/flysystem-ziparchive' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ab2e804c6c121e30f8ccb0c996bf418c3c8ccab8',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.25.3',
      'version' => '1.25.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa82921994db851a8becaf3787a9e73c5976b6f1',
    ),
    'nikic/fast-route' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '181d480e08d9476e61381e04a71b34dc0432e812',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.4.0',
      'version' => '4.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
    ),
    'php-di/invoker' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '540c27c86f663e20fe39a24cd72fa76cdb21d41a',
    ),
    'php-di/php-di' => 
    array (
      'pretty_version' => '6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '9bdcc2f41f5fb700ddd01bc4fa8d5bd7b3f94620',
    ),
    'php-di/phpdoc-reader' => 
    array (
      'pretty_version' => '2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '15678f7451c020226807f520efb867ad26fbbfcf',
    ),
    'phpseclib/phpseclib' => 
    array (
      'pretty_version' => '2.0.27',
      'version' => '2.0.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '34620af4df7d1988d8f0d7e91f6c8a3bf931d8dc',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '^1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
      ),
    ),
    'rakit/validation' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd7710a2c8133d89b5640b79e832f370ad2d58767',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v1.1.7',
      'version' => '1.1.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v4.4.8',
      'version' => '4.4.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ec5bd254c223786f5fa2bb49a1e705c1b8e7cee2',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v4.4.8',
      'version' => '4.4.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a583ffb6c7dd5aabb5db920817a3cc39261c517',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ab0af41deab94ec8dceb3d1fb408bdd038eba4dc',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a54881ec0ab3b2005c406aed0023c062879031e7',
    ),
    'symfony/polyfill-php56' => 
    array (
      'pretty_version' => 'v1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '14b55b0e88c67c6a14526799abaea197dde78911',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '42fda6d7380e5c940d7f68341ccae89d5ab9963b',
    ),
    'symfony/polyfill-util' => 
    array (
      'pretty_version' => 'v1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa1fdaf94e8a60932d8821692eb1ed07efc52db2',
    ),
    'symfony/security-core' => 
    array (
      'pretty_version' => 'v4.4.8',
      'version' => '4.4.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc84e9481e5bd9d80f70c0d8151601211377a5dc',
    ),
    'symfony/security-csrf' => 
    array (
      'pretty_version' => 'v4.4.8',
      'version' => '4.4.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '286a71ff176e1b0dd071f0e73dcec0970a56634b',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v1.1.8',
      'version' => '1.1.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ffc7f5692092df31515df2a5ecf3b7302b3ddacf',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
