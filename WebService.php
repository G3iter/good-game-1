<?php

class WebService {

   	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $db_name = "gedas";
	private $db;
	var $db_log = array();

	function __construct() {}

	protected function db_connect() {
	    $this->db = mysqli_connect($this->servername, $this->username, $this->password, $this->db_name);
	    $this->db_log[] = mysqli_connect_error() ? mysqli_connect_error() : 'Connected successfully';
	}

	public function check_db_log() {
	    return $this->db_log;
	}

	protected function db_close_connection() {
		mysqli_close($this->db);
	}

	protected function insert_data($tablename, $cols, $vals ) {

		$columns = implode(", ", $cols);
		$values = implode("', '", $vals);
		$this->db_connect();

		$query = "INSERT INTO `$tablename` ($columns) VALUES ('$values')";
		$response = mysqli_query($this->db, $query);
		$outcome = (mysqli_error($this->db) !== '') ? mysqli_error($this->db) : 'success.';
		$this->db_log[] = 'Insert of: ' . $query . ' resulted in: ' . $outcome;

		$this->db_close_connection();

		return $response;
	}

	protected function get_data($tablename = '', $select = '', $col = '', $val = '', $custom_query = false) {

		$this->db_connect();

		$val = mysqli_real_escape_string($this->db, $val);

		if (!$custom_query) {
			$query = "SELECT $select FROM `$tablename` WHERE $col='$val'";
		} else {
			$query = $custom_query;
		}
		$response = mysqli_query($this->db, $query);
		$outcome = (mysqli_error($this->db) !== '') ? mysqli_error($this->db) : 'success.';
		$this->db_log[] = 'Select of: ' . $query . ' resulted in: ' . $outcome;

		$this->db_close_connection();
		$row = $response->fetch_assoc();
		return $row[$select];
	}

	public function add_game_to_cart() {
		
        if (!isset($_SESSION['games'])) {
            $games = array($_POST["add-cart-game"]);
        } else {
            $games = $_SESSION['games'];
            $games[] = $_POST["add-cart-game"];
        }
        $_SESSION['games'] = $games;
        $_SESSION['item-just-added'] = true;
	}

	public function remove_games_from_cart() {
		if (isset($_SESSION['games'])) {
			unset($_SESSION['games']);
		}
	}

	public function login_user($email, $password) {
		if ($this->check_if_user_exists($email)) {
			$this->register_user($email, $password);
		}
		$_SESSION['active-user'] = $email;
		header("Refresh:0");
	}

	public function check_if_user_exists($email) {
		if ($this->get_data('users', 'id', 'email', $email) > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function register_user($email, $password) {
		$hashed_password = hash('sha512', $password);
		$this->insert_data('users', array('email', 'password'), array($email, $hashed_password));
	}

	public function logout_user() {
		if (isset($_SESSION['active-user'])) {
			unset($_SESSION['active-user']);
		}
		$this->remove_games_from_cart();
	}

}

?>