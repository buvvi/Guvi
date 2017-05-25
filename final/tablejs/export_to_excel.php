    <?php
    include 'conn.php';
    $SQL = "SELECT  first_name as First_Name,Last_name as Last_Name,email as Email,mobile as Phone_No,address as Office_Address,city as City,state as State,zip as Zip,description as Description from Customer_detail";
    $header = '';
    $result ='';
    $exportData = mysql_query ($SQL);
     
    $fields = mysql_num_fields ( $exportData );
     
    for ( $i = 0; $i < $fields; $i++ ) {
        $header .= mysql_field_name( $exportData , $i ) . "\t";
    }
     
    while( $row = mysql_fetch_row( $exportData ) )    {
        $line = '';
        foreach( $row as $value )
        {                                            
            if ( ( !isset( $value ) ) || ( $value == "" ) )
            {
                $value = "\t";
            }
            else
            {
                $value = str_replace( '"' , '""' , $value );
                $value = '"' . $value . '"' . "\t";
            }
            $line .= $value;
        }
        $result .= trim( $line ) . "\n";
    }
    $result = str_replace( "\r" , "" , $result );
    error_log($result);
     
    if ( $result == "" )
    {
        $result = "\nNo Record(s) Found!\n";                        
    }
     
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=customer_data.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    print "$header\n$result";
     
    ?>