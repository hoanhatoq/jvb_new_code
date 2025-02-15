<?php
/**
 * SessionComponent. Provides access to Sessions from the Controller layer
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
 * @package       Cake.Controller.Component
 * @since         CakePHP(tm) v 0.10.0.1232
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Component', 'Controller');
App::uses('CakeSession', 'Model/Datasource');

/**
 * The CakePHP SessionComponent provides a way to persist client data between
 * page requests. It acts as a wrapper for the `$_SESSION` as well as providing
 * convenience methods for several `$_SESSION` related functions.
 *
 * @package       Cake.Controller.Component
 * @link http://book.cakephp.org/2.0/en/core-libraries/components/sessions.html
 * @link http://book.cakephp.org/2.0/en/development/sessions.html
 */
class SessionComponent extends Component {

/**
 * Get / Set the userAgent
 *
 * @param string $userAgent Set the userAgent
 * @return void
 */
	public function userAgent($userAgent = null) {
		return CakeSession::userAgent($userAgent);
	}

/**
 * Used to write a value to a session key.
 *
 * In your controller: $this->Session->write('Controller.sessKey', 'session value');
 *
 * @param string $name The name of the key your are setting in the session.
 * 							This should be in a Controller.key format for better organizing
 * @param string $value The value you want to store in a session.
 * @return bool Success
 * @link http://book.cakephp.org/2.0/en/core-libraries/components/sessions.html#SessionComponent::write
 */
	public function write($name, $value = null) {
		return CakeSession::write($name, $value);
	}

/**
 * Used to read a session values for a key or return values for all keys.
 *
 * In your controller: $this->Session->read('Controller.sessKey');
 * Calling the method without a param will return all session vars
 *
 * @param string $name the name of the session key you want to read
 * @return mixed value from the session vars
 * @link http://book.cakephp.org/2.0/en/core-libraries/components/sessions.html#SessionComponent::read
 */
	public function read($name = null) {
		return CakeSession::read($name);
	}

/**
 * Wrapper for SessionComponent::del();
 *
 * In your controller: $this->Session->delete('Controller.sessKey');
 *
 * @param string $name the name of the session key you want to delete
 * @return bool true is session variable is set and can be deleted, false is variable was not set.
 * @link http://book.cakephp.org/2.0/en/core-libraries/components/sessions.html#SessionComponent::delete
 */
	public function delete($name) {
		return CakeSession::delete($name);
	}

/**
 * Used to check if a session variable is set
 *
 * In your controller: $this->Session->check('Controller.sessKey');
 *
 * @param string $name the name of the session key you want to check
 * @return bool true is session variable is set, false if not
 * @link http://book.cakephp.org/2.0/en/core-libraries/components/sessions.html#SessionComponent::check
 */
	public function check($name) {
		return CakeSession::check($name);
	}

/**
 * Used to determine the last error in a session.
 *
 * In your controller: $this->Session->error();
 *
 * @return string Last session error
 */
	public function error() {
		return CakeSession::error();
	}

/**
 * Used to set a session variable that can be used to output messages in the view.
 *
 * In your controller: $this->Session->setFlash('This has been saved');
 *
 * Additional params below can be passed to customize the output, or the Message.[key].
 * You can also set additional parameters when rendering flash messages. See SessionHelper::flash()
 * for more information on how to do that.
 *
 * @param string $message Message to be flashed
 * @param string $element Element to wrap flash message in.
 * @param array $params Parameters to be sent to layout as view variables
 * @param string $key Message key, default is 'flash'
 * @return void
 * @link http://book.cakephp.org/2.0/en/core-libraries/components/sessions.html#creating-notification-messages
 */
	public function setFlash($message, $type="message") {
	//If flash messages are already stored in session, fetch array
	if(CakeSession::check('flashMessages'))
		$messages = CakeSession::read('flashMessages');
	//Else, create a new empty array
	else
		$messages = array();
	//If the flash message type is not supported (only "error", "notice", "success" and "warning"), set it to "notice"
	if(!in_array($type = strtolower($type), array("error", "notice", "success", "warning")))
		$type = "notice";
	//Add the passed flash message to the array
	$messages[$type][] = $message;
	//Store in sessione
	CakeSession::write('flashMessages', $messages);
}

/**
 * Used to renew a session id
 *
 * In your controller: $this->Session->renew();
 *
 * @return void
 */
	public function renew() {
		return CakeSession::renew();
	}

/**
 * Used to check for a valid session.
 *
 * In your controller: $this->Session->valid();
 *
 * @return bool true is session is valid, false is session is invalid
 */
	public function valid() {
		return CakeSession::valid();
	}

/**
 * Used to destroy sessions
 *
 * In your controller: $this->Session->destroy();
 *
 * @return void
 * @link http://book.cakephp.org/2.0/en/core-libraries/components/sessions.html#SessionComponent::destroy
 */
	public function destroy() {
		return CakeSession::destroy();
	}

/**
 * Get/Set the session id.
 *
 * When fetching the session id, the session will be started
 * if it has not already been started. When setting the session id,
 * the session will not be started.
 *
 * @param string $id Id to use (optional)
 * @return string The current session id.
 */
	public function id($id = null) {
		if (empty($id)) {
			CakeSession::start();
		}
		return CakeSession::id($id);
	}

/**
 * Returns a bool, whether or not the session has been started.
 *
 * @return bool
 */
	public function started() {
		return CakeSession::started();
	}

}
