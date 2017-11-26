<?php
class Mysql
{
        private $user;
        private $pass;
        private $data;
        private $host;

        public function __construct($user,$pass,$data,$host)
        {
                $this->user = $user;
                $this->pass = $pass;
                $this->data = $data;
                $this->host = $host;
                $this->process();
        }

        /* INTERFACE */
        private function process()
        {
                if($this->verifyNullFields()==true)
                {
                        if($this->verifyDatabaseConnection()==true)
                        {
                                if($this->verifyDatabaseExist()==true)
                                {
                                        print('ALL PASSED'); //for debugging
                                }
                                else
                                {
                                        print('redirect to custom error page will go here');
                                }
                        }

                        else
                        {
                                  print('redirect to custom error page will go here');
                        }

                }
                else
                {
                        print('redirect to custom error page will go here');
                }
        }

        /* IMPLEMENTATIONS */
        private function verifyNullFields()
        {
                if($this->user != NULL)
                {
                        if($this->data != NULL)
                        {
                                if($this->host != NULL)
                                {
                                        return true;
                                }
                                else
                                {
                                        return false;
                                }

                        }
                        else
                        {
                                return false;
                        }
                }
                else
                {
                        return false;
                }
        }
        private function verifyDatabaseConnection()
        {
                $link = @mysql_connect($this->host,$this->user,$this->pass);
                if(!$link)
                {
                        return false ;
                }
                else
                {
                        return true;
                }
        }
        private function verifyDatabaseExist()
        {
                $db = @mysql_select_db($this->data);
                if(!$db)
                {
                        return false;
                }
                else
                {
                        return true;
                }
        }
}
?>
