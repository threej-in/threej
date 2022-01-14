<?php
class threejdb{
    private
        $con;

    protected
        $result,
        $dberror="database error";

    public
        /**
         * @return object|false - mysqli connection object or false on failure
         */
        function newDatabaseConnection(){
            
            $this->con = new mysqli(
                $GLOBALS['SERVER'],
                $GLOBALS['DBUSER'],
                $GLOBALS['DBPASS'],
                $GLOBALS['DATABASE']
            );
            if(gettype($this->con) == 'object' && $this->con->connect_errno != 0){
                $this->dberror = $this->con->connect_error;
                return false;
            }else{
                return $this->con;
            }
            return false;
        }
    //public scope ends
}
?>
