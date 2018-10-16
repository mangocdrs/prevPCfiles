 <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <table border="1">  
      <tbody>  
         <tr>  
            <td>Id</td>  
            <td>Title</td> 
             <td>Contact</td>  
            <td>Date</td>   
         </tr>  
         <?php  
         foreach ($h as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->id;?></td>  
            <td><?php echo $row->Title;?></td>  
              <td><?php echo $row->Content;?></td>  
            <td><?php echo $row->Date;?></td> 
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  
<body>  
</body>  
</html>
