<?php

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = 'ostrolucky/stdinho';
    const VERSIONS = array (
  'amphp/amp' => 'v2.0.7@d561cc9736bc18dd94a2fc9cdae98b616bd92c43',
  'amphp/byte-stream' => 'v1.5.0@37b9ab16bb8f69c825c3c4e553fe00da73dd6926',
  'amphp/cache' => 'v1.2.0@ab2339e465d9d383dc748f288d530fd7cd7aadea',
  'amphp/dns' => 'v0.9.13@4647e5f58263ffdeff7da5c269f517cb48cff84f',
  'amphp/file' => 'v0.3.3@25d8ef6e67b95d5249e0af7a80adce77657d16bb',
  'amphp/parallel' => 'v1.0.1@4c3c93e46a0108f04990352b0d084ded2ec2cc17',
  'amphp/parser' => 'v1.0.0@f83e68f03d5b8e8e0365b8792985a7f341c57ae1',
  'amphp/process' => 'v1.0.0@9d0d7ab3601272ec66d2b13f6d606257926b2c40',
  'amphp/socket' => 'v0.10.11@2cb9d0ef823cfd1de4cfbd0e680c58841367f727',
  'amphp/sync' => 'v1.0.1@a1d8f244eb19e3e2a96abc4686cebc80995bbc90',
  'amphp/uri' => 'v0.1.3@b857ba4df3cf0852302ba1637fccce4ce1205241',
  'amphp/windows-registry' => 'v0.3.2@834af7a30ad7c006b0326ccd2686ddc6e6943366',
  'daverandom/libdns' => 'v2.0.1@1ecd825b6fa9bb3fddc07751997e29dc78749b95',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'ocramius/package-versions' => '1.3.0@4489d5002c49d55576fa0ba786f42dbb009be46f',
  'psr/log' => '1.0.2@4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
  'symfony/console' => '2.0.7@e76444b1c5e78d40ea7658988a8051ef55d9684c',
  'symfony/polyfill-mbstring' => 'v1.10.0@c79c051f5b3a46be09205c73b80b346e4153e494',
  'symfony/polyfill-php72' => 'v1.10.0@9050816e2ca34a8e916c3a0ae8b9c2fccf68b631',
  'ostrolucky/stdinho' => 'dev-deps/update-5e37702e@df7197cbd837237f32faab759f6b47712c5eee1e',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException if a version cannot be located
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: cannot detect its version'
        );
    }
}