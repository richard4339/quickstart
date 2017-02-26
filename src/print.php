<?php
/**
 * quickstart
 * @author Richard Lynskey <richard@mozor.net>
 * @copyright Copyright (c) 2016-2017, Richard Lynskey
 * @version 1.0.5
 *
 * Built 2017-02-26 11:19 CST by Richard Lynskey
 *
 */

/**
 * Print an array using the print_r() function wrapped in <pre> tags.
 * Can optionally add a class and ID to the <pre> tag
 * @param array $a
 * @param string $class
 * @param string $id
 * @param bool $return
 * @return mixed
 */
function _pr($a, $class = '', $id = '', $return = false)
{
    $pclass = '';
    $pid = '';
    $output = '';
    if ($class != '') {
        $pclass = ' class="' . $class . '"';
    }
    if ($id != '') {
        $pid = ' id="' . $id . '"';
    }
    $output .= '<pre' . $pclass . $pid . '>';
    $output .= print_r($a, true);
    $output .= '</pre>';

    if(!$return) {
        print $output;
    }

    return $output;
}

/**
 * Print the $_REQUEST global using the print_r() function wrapped in <pre> tags.
 * Can optionally add a class and ID to the <pre> tag
 * @param string $class
 * @param string $id
 * @param bool $return
 * @return mixed
 */
function printRequest($class = '', $id = '', $return = false) {
    return _pr($_REQUEST, $class, $id, $return);
}

/**
 * Print the $_POST global using the print_r() function wrapped in <pre> tags.
 * Can optionally add a class and ID to the <pre> tag
 * @param string $class
 * @param string $id
 * @param bool $return
 * @return mixed
 */
function printPost($class = '', $id = '', $return = false) {
    return _pr($_POST, $class, $id, $return);
}

/**
 * Print the $_GET global using the print_r() function wrapped in <pre> tags.
 * Can optionally add a class and ID to the <pre> tag
 * @param string $class
 * @param string $id
 * @param bool $return
 * @return mixed
 */
function printGet($class = '', $id = '', $return = false) {
    return _pr($_GET, $class, $id, $return);
}

/**
 * Print a "pretty" version of a PHP exception in a nice bootstrap alert
 * If the constant SHOWTRACE is set to false, the stack trace will be hidden.
 * If the trace is empty, the stack trace will be hidden.
 *
 * @param Exception $ex
 * @param array ...$args False will hide the title altogether, a string will override the title, omitting the argument will print a full error header with the filename and line
 */
function printError($ex, ...$args)
{
    $showErrorTitle = true;
    $errorTitle = null;
    foreach($args as $i) {
        if(is_bool($i)) {
            $showErrorTitle = $i;
        } else {
            $errorTitle = $i;
        }
    }
    if(!empty($errorTitle)) {
        $showErrorTitle = true;
    }
    ?>
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span>
    <?php
    if($showErrorTitle && empty($errorTitle)) {
        printf('<strong>Error in %s on line %d</strong><br/>', $ex->getFile(), $ex->getLine());
    } elseif($showErrorTitle && !empty($errorTitle)) {
        printf('<strong>%s</strong><br/>', $errorTitle);
    }
    echo $ex->getMessage();

    $showTrace = true;
    $trace = $ex->getTraceAsString();

    if(defined('SHOWTRACE')) {
        if(!constant('SHOWTRACE')) {
            $showTrace = false;
        }
    }
    if($showTrace && $trace == '#0 {main}') {
        $showTrace = false;
    }

    if($showTrace) {
        ?><br/><br/>
        <pre class="in-alert"><?php echo $ex->getTraceAsString(); ?></pre><?php
    }
    ?>
    </div><?php
}