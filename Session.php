<?php
/**
 * @package Session
 * @link    ''
 * @author  Zaqueu Alves <zaqueu.alves01@gmail.com>
 * @license http://www.gnu.org/licenses/gpl-3.0.html
 * @version 1.0
 */
namespace application\libraries\Session;

class Session 
{    
    /**
     * delete
     *
     * @param  string $name
     * @return void
     */
    public function delete($name)
    {
        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
            return true;
        }
        return false;
    }
    
    /**
     * update
     *
     * @param  string $name
     * @param  string $value
     * @return void
     */
    public function update($name, $value)
    {
        return $this->create($name, $value);
    }
    
    /**
     * read
     *
     * @param  string $name
     * @return void
     */
    public function read($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
        return "";
    }
    
    /**
     * create
     *
     * @param  string $name
     * @param  string $value
     * @return void
     */
    public function create($name, $value)
    {
        if (empty($name)) {
            return false;
        }

        $_SESSION[$name] = $value;
        return true;
    }
    
    /**
     * destroy
     *
     * @return void
     */
    public function destroy()
    {
        session_destroy();
        return true;
    }
    
    /**
     * start
     *
     * @return void
     */
    public function start()
    {
        session_start();
        return true;
    }
}
?>