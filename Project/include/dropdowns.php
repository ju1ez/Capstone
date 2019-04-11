<div class="form-group">
                     <label>Kent Core | Composition (KCMP)</label>
                      <select name ="kcmp1" class="form-control">
                        <option selected value ="0">Select...</option> 
                         <optgroup label="Kent Core">
                            <option>
                              <?php
                                $sql = 'SELECT * FROM requirements WHERE Requirement="KCMP"';
                                $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {   

                                   echo '<option value="' . $row['CourseID'] . '"';
                                   if (isset($_GET['kcmp1']) && $row['CourseID'] == $_GET['kcmp1']) 
                                      echo ' selected ';
                                   echo '>';
                                   echo $row['CourseID'];
                                   echo ': ' . $row['CourseID'];
                                   echo '</option>';
                                }
                              ?>                  
                          </option>
                        </optgroup>
                      </select>
                   </div>
                  <div class="form-group">
                     <label>Kent Core |  (KFA)</label>
                      <select name ="kfa" class="form-control">
                        <option selected>Select...</option> 
                          <optgroup label="KFA - Kent Core Requirement">
                            <option>
                              <?php
                                $sql = 'SELECT * FROM requirements WHERE Requirement="KFA"';
                                $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {         
                                   echo '<option value="' . $row['CourseID'] . '"';
                                   if (isset($_GET['kfa']) && $row['CourseID'] == $_GET['kfa']) 
                                      echo ' selected ';
                                   echo '>';
                                   echo $row['CourseID'];
                                   echo '</option>';
                                 } ?>                  
                          </option>
                        </optgroup>
                      </select>
                   </div>
                  <div class="form-group">
                     <label>Kent Core - KHUM</label>
                      <select name ="khum" class="form-control">
                        <option selected>Select...</option> 
                          <optgroup label="KHUM - Kent Core Requirement">
                            <option>
                              <?php
                                $sql = 'SELECT * FROM requirements WHERE Requirement="KHUM"';
                                $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {         
                                   echo '<option value="' . $row['CourseID'] . '"';
                                   if (isset($_GET['khum']) && $row['CourseID'] == $_GET['khum']) 
                                      echo ' selected ';
                                   echo '>';
                                   echo $row['CourseID'];
                                   echo '</option>';
                                 } ?>                  
                          </option>
                        </optgroup>
                      </select>
                   </div>
                   
                   <div class="form-group">
                     <label>Kent Core - KFA/KHUM</label>
                      <select name ="kfa/khum" class="form-control">
                        <option selected>Select...</option> 
                          <optgroup label="KFA/KHUM - Kent Core Requirement">
                            <option>
                              <?php
                                $sql = 'SELECT * FROM requirements WHERE (Requirement="KHUM" OR Requirement="KFA")';
                                $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {         
                                   echo '<option value="' . $row['CourseID'] . '"';
                                   if (isset($_GET['kfa/khum']) && $row['CourseID'] == $_GET['kfa/khum']) 
                                      echo ' selected ';
                                   echo '>';
                                   echo $row['CourseID'];
                                   echo '</option>';
                                 } ?>                  
                          </option>
                        </optgroup>
                      </select>
                   </div>
                   
                   <div class="form-group">
                     <label>Kent Core - KSS</label>
                      <select name ="kss" class="form-control">
                        <option selected>Select...</option> 
                          <optgroup label="KSS - Kent Core Requirement">
                            <option>
                              <?php
                                $sql = 'SELECT * FROM requirements WHERE Requirement="KSS"';
                                $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {         
                                   echo '<option value="' . $row['CourseID'] . '"';
                                   if (isset($_GET['kss']) && $row['CourseID'] == $_GET['kss']) 
                                      echo ' selected ';
                                   echo '>';
                                   echo $row['CourseID'];
                                   echo '</option>';
                                 } ?>                  
                          </option>
                        </optgroup>
                      </select>
                   </div>
                   
                   <div class="form-group">
                     <label>Kent Core - KBS</label>
                      <select name ="kbs" class="form-control">
                        <option selected>Select...</option> 
                          <optgroup label="KBS - Kent Core Requirement">
                            <option>
                              <?php
                                $sql = 'SELECT * FROM requirements WHERE Requirement="KBS"';
                                $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {         
                                   echo '<option value="' . $row['CourseID'] . '"';
                                   if (isset($_GET['kbs']) && $row['CourseID'] == $_GET['kbs']) 
                                      echo ' selected ';
                                   echo '>';
                                   echo $row['CourseID'];
                                   echo '</option>';
                                 } ?>                  
                          </option>
                        </optgroup>
                      </select>
                   </div>
                   
                   <div class="form-group">
                     <label>Kent Core - KLAB</label>
                      <select name ="klab" class="form-control">
                        <option selected>Select...</option> 
                          <optgroup label="KLAB - Kent Core Requirement">
                            <option>
                              <?php
                                $sql = 'SELECT * FROM requirements WHERE Requirement="KLAB"';
                                $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {         
                                   echo '<option value="' . $row['CourseID'] . '"';
                                   if (isset($_GET['klab']) && $row['CourseID'] == $_GET['klab']) 
                                      echo ' selected ';
                                   echo '>';
                                   echo $row['CourseID'];
                                   echo '</option>';
                                 } ?>                  
                          </option>
                        </optgroup>
                      </select>
                   </div>