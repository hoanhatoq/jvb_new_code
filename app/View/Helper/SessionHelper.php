<?php
/**
 * Session Helper provides access to the Session in the Views.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Helper
 * @since         CakePHP(tm) v 1.1.7.3328
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppHelper', 'View/Helper');
App::uses('CakeSession', 'Model/Datasource');

/**
 * Session Helper.
 *
 * Session reading from the view.
 *
 * @package       Cake.View.Helper
 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/session.html
 */
class SessionHelper extends AppHelper {

/**
 * Used to read a session values set in a controller for a key or return values for all keys.
 *
 * In your view: `$this->Session->read('Controller.sessKey');`
 * Calling the method without a param will return all session vars
 *
 * @param string $name the name of the session key you want to read
 * @return mixed values from the session vars
 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/session.html#SessionHelper::read
 */
	public function read($name = null) {
		return CakeSession::read($name);
	}

/**
 * Used to check is a session key has been set
 *
 * In your view: `$this->Session->check('Controller.sessKey');`
 *
 * @param string $name Session key to check.
 * @return bool
 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/session.html#SessionHelper::check
 */
	public function check($name) {
		return CakeSession::check($name);
	}

	public function error() {
		return CakeSession::error();
	}

	public function flash() {
	//Check if flash messages are stored in session
        if(CakeSession::check('flashMessages')) {
            //Retrieve saved flash messages and deletes them from the session
            $messages = CakeSession::read('flashMessages');
            CakeSession::delete('flashMessages');
            //Prepare the $out variable that will contain the final output
            $out = "";
            //Loop every flash message that is stored in session, appending to the variable $out
            foreach ($messages as $type => $message) {
                foreach ($message as $text)
                    $out .= '<div class="'.$type.'">'.$text.'</div>';
            }
            //Return flash messages in html
            return $out;
        }
}

/**
 * Used to check is a session is valid in a view
 *
 * @return bool
 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/session.html#SessionHelper::valid
 */
	public function valid() {
		return CakeSession::valid();
	}

}
