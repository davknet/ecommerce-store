<?php 
namespace  Incl\Tra ;

















trait ActivationQueryfunctions 
{
    protected  static  function sellectAllTablesNames()
    {
        global $wpdb ; 
        $sql = " SHOW TABLES ; " ;
        $result = $wpdb->get_results($sql , ARRAY_A ); 
        return $result ;
    }
    
   public   static  function getPrefix()
    {
        global $wpdb ;
        return $wpdb->prefix ;
    }



    public function create_user_rest_api_tokens_table( string $name  , string $prefix  )
    {
        $table_name = $prefix  . $name ;
        $wp_users   = $prefix  . 'users' ;
        global $wpdb ;

        $sql        = "CREATE TABLE  $table_name (
                id BIGINT(20) AUTO_INCREMENT PRIMARY KEY,
                user_email VARCHAR(255) UNIQUE,
                user_pass VARCHAR(255) NOT NULL,
                token VARCHAR(2048),
                user_id BIGINT(20) UNSIGNED ,
                create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                expire_at TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES $wp_users(ID)
                );" ;

     return $result =  $wpdb->query($sql) ;

    }
     

}
