<?php

function idtoname($tablename,$idfieldname,$idfieldvalue,$fetchfield,$connection)
{
        $sql = "SELECT $fetchfield FROM $tablename WHERE $idfieldname = ?";
        
        if($stmt = mysqli_prepare($connection, $sql))
        {
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            $param_id = $idfieldvalue;
            if(mysqli_stmt_execute($stmt))
            {           
				$productsRow = array();
				mysqli_stmt_bind_result($stmt, $productsRow[$fetchfield]);
				while(mysqli_stmt_fetch($stmt))
				{
					$returnvalue = $productsRow[$fetchfield];
					return $returnvalue;
				}
			
			
			}
		}
		
        //~ mysqli_stmt_close($stmt);
		//~ mysqli_close($connection);

}


function checkifpresent($table,$column,$post,$db)
{
	
	$check = "SELECT * FROM $table WHERE $column = ?";
	if($stmt = mysqli_prepare($db, $check))
	{
		mysqli_stmt_bind_param($stmt, "s", $post);
		if(mysqli_stmt_execute($stmt))
		{
			 mysqli_stmt_store_result($stmt);
				
				$send = mysqli_stmt_num_rows($stmt);
				return $send;

			}
	}
        mysqli_stmt_close($stmt);
		mysqli_close($db);
}

function checkforchild($table,$column,$post,$db)
{
	
	$check = "SELECT * FROM $table WHERE $column = ?";
	if($stmt = mysqli_prepare($db, $check))
	{
		mysqli_stmt_bind_param($stmt, "s", $post);
		if(mysqli_stmt_execute($stmt))
		{
			 mysqli_stmt_store_result($stmt);
				
				$send = mysqli_stmt_num_rows($stmt);
				return $send;

			}
		}
        mysqli_stmt_close($stmt);
		mysqli_close($db);
}



?>
