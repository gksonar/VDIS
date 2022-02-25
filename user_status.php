 <?php
                            require 'db.php';
                            $select = "select * from puc_user ";
                            mysqli_query($con,"SET CHARACTER SET 'utf8'");
                            mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
                                                          //echo $select;
                             $i=1;
                              if ($result = $con->query($select))
                                 {
                                       while ($data = $result->fetch_assoc())
                                       {
                                          echo'
                      <tbody>
                      <input type="hidden"  name="id" value='.$data["id"].'>
                        <tr>
                          <td class="py-1" id="'.$data["id"].'">
                            '.$data["id"].'
                          </td>
                          <td>
                            '.$data["name"].'
                          </td>';
                      if($data["status"] == NULL)
                      {
                        echo '
                          <td>
                            <label class="badge badge-info" style="background-color:gray;">Pending</label>
                          </td>
                          <td>
                            <a href="view_user_puc.php?id='.$data["id"].'"><button class="btn btn-outline-primary" >View</button></a>
                          </td>';
                      }
                      elseif($data["status"] == "1")   
                      {
                        echo '
                          <td>
                            <label class="badge badge-info" style="background-color:#21b321;">Approve</label>
                          </td>
                          <td>
                           
                          </td>';
                      }    
                      else
                      {
                        echo '
                          <td>
                            <label class="badge badge-info" style="background-color:red;">Disapprove</label>
                          </td>
                          <td>
                           
                          </td>';
                      }    
                      echo'               
                        
                        </tr>
                        
                      </tbody>';
                }}?>