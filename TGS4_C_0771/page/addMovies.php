    <?php
        include '../component/sidebar.php';  
         
    ?>

        <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <div class="body d-flex justify-content-between">
                <h2>Add Movie</h2>
            </div>
            
                    
                
      <left>    
         <form action="../process/addMovieProcess.php" method="post">
             


               <label for="Name">Name</label>
               &nbsp;&nbsp;
               <input type="text" name="name" id="name" style="margin-top: 0.4cm;margin-left:0.2cm">

                <br>
 
             

               <label for="Genre">Genre</label>
               &nbsp;&nbsp;
               <input type="text" name="genre" id="genre" style="margin-top: 0.4cm;margin-left:0.2cm">
               <br>
          
 
             

               <label for="Realese">Release</label>
                
               <input type="text" name="realese" id="realese" style="margin-top: 0.4cm;margin-left: 0.2cm">
               <b></b>
               <br>


               <label for="Episode">Episode</label>
               <input type="text" name="episode" id="episode" style="margin-top: 0.4cm;margin-left: 0.2cm;">
               <br>
            
        
 
             
          <label for="Season">Season</label>
               <input type="text" name="season" id="season" style="margin-top: 0.4cm;margin-left: 0.3cm;">
               <br>
            
 
             

               <label for="Synopsis">Synopsis</label>
               <input type="text" name="synopsis" id="synopsis" style="margin-top: 0.4cm;margin-left:auto">
               <br>
            

            
            <button type="submit" class="btn btn-primary" name="addMovies" style="margin-top: 0.4cm;margin-top:0.5cm;">Add</button>
            
         </form>
      </center>
  


    
        </div>
    