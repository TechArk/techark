<?php require_once __DIR__ . '/../vendor/autoload.php';

/**
 * @file constructs xDruple Application
 *
 * @see  xdruple_application()
 */

if ((!empty($databases) || !empty($GLOBALS['install']))
  && empty($GLOBALS['application'])
  && empty($GLOBALS['__PHPUNIT_BOOTSTRAP'])
) {
  include __DIR__ . '/environment.php';
  $configuration['databases'] = !empty($databases) ? $databases : $GLOBALS['install']['databases'];
  $configuration['root'] = realpath(__DIR__ . '/..');
  include __DIR__ . '/flywheel/configuration.php';
  $flywheel = isset($flywheel) ? $flywheel : [];
  $GLOBALS['application'] = new \Xtuple\Xdruple\Flywheel\FlywheelApplication($configuration, $flywheel);
  $GLOBALS['environment'] = $GLOBALS['application']->configuration();
  if (!empty($GLOBALS['install'])) {
    $GLOBALS['environment'] = array_merge($GLOBALS['environment'], $GLOBALS['install']);
  }
}
