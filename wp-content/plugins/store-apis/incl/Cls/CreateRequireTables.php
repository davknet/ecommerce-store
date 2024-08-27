<?php 
namespace Incl\Cls; 

use Incl\Tra\ActivationQueryfunctions ;


















class CreateRequireTables 
{



    use ActivationQueryfunctions  ;
    protected     array    $allDataBaseTables ;
    protected     array    $plugin_table_names  = [
     
        'user_rest_api_tokens'  ,

    ] ;
    protected  string $prefix ;

    /**
     * Instance of this class.
     *
     * @since    1.0.0
     *
     * @var      object
     */
    protected static $instance = null;

    /**
     * Custom table name, WPDB prefix will be added later
     *
     * @since    1.0.0
     *
     * @var      array
     */
    private  $db_table_name = STORE_APIS_DB_NAME ;



   

    /**
     * Initialize the plugin by setting localization and loading public scripts
     * and styles.
     *
     * @since     1.0.0
     */
    private function __construct()
    {
       $db_name                  = "Tables_in_" . $this->db_table_name   ;
       $table_names              = self::sellectAllTablesNames() ;  
       $this->allDataBaseTables  =  array_column($table_names , $db_name  );
       $this->prefix             = self::getPrefix() ;
     
    //  error_log( self::$db_option_name . ' Plugin has been activated. ');
      
         
    }

    /**
     * Return an instance of this class.
     *
     * @since     1.0.0
     *
     * @return    object    A single instance of this class.
     */
    public static function get_instance()
    {

        // If the single instance hasn't been set, set it now.
        if (null == self::$instance) 
        {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * Fired when the plugin is activated.
     *
     * @since    1.0.0
     *
     * @param    boolean    $network_wide    True if WPMU superadmin uses
     *                                       "Network Activate" action, false if
     *                                       WPMU is disabled or plugin is
     *                                       activated on an individual blog.
     */
    public  function activate()
    {
          
        $this->create_non_existent_tables( $this->prefix  );

    }






    public static function getTableName()
    {
        return  $this->prefix  . $this->db_table_name;
    }





        /**
         * the method check if table name is  in the all
         *  database tables list if not return false 
         *
         * @param string  $table_name  database table name 
         * @param string  $prefix  database table prefix 
         * @return bool  
        */

    


        protected   function make_sure_the_table_does_not_exist( string $table_name , string  $prefix = null ):bool 
        {       
                $n_table_name = ( !is_null($prefix) )? $prefix . $table_name : $table_name ;
    
                if(in_array( $n_table_name  ,  $this->allDataBaseTables ))
                {
                    return true ;
                }
                return false ;
        }
    
    
    
            /**
             * the method create not existing tables in database
             * @param string  $prefix  database tables prefix 
             * @return void 
             * 
            */

    protected  function create_non_existent_tables( string $prefix = null )
    {
         $prefix       = (is_null($prefix)) ? '' : $prefix ;
         $table_names  =  $this->plugin_table_names ;
         foreach( $table_names as $key => $name  )
         {
             if( !$this->make_sure_the_table_does_not_exist( $name  ,  $prefix ) )
             {
                     $function_name =  'create_' . $name .'_table' ;  
                     $this->$function_name( $name , $prefix   );
             }
         }
    }
}