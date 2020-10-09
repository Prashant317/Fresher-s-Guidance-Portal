<?php require("header.php");
    
?>

<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>

                <div class="art-contentLayout">
                    <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
`                            <h2 class="art-PostHeaderIcon-wrapper">
                                <img src="res/images/welcome.jpg" width="9" height="9" alt="PostHeaderIcon" />
                                <span class="art-PostHeader">Welcome</span>
                            </h2>
                            <div class="art-PostContent">
                                
                                
<p align="justify"><b>Hello,Freshers!! Welcome to the Discussion Forum</b> It is a discussion forum that gives information related to CAT,FAT or places in and out of the campus. </p>

<p align="justify">This forum is useful for the beginners to get information  related to  various topics.   

<p align="justify">Whenever you ask a question to get information ,it is received by the administrator who fetches the information from the database and reply to the end-user. Whenever the new information is arrived it is updated by the end-user. The end-user is provided with the access rights which is  managed by the administrator. The access to the database is provided to the end-user according to these rights only.</p>

                                
                                <p>
                                	<span class="art-button-wrapper">
                                		<span class="l"> </span>
                                		<span class="r"> </span>
                                		<a class="art-button" href="javascript:void(0)">Read more...</a>
                                	</span>
                                </p>
                                
                                   
                            </div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                            <h2 class="art-PostHeaderIcon-wrapper">
                                <img src="res/images/welcome.jpg" width="9" height="9" alt="PostHeaderIcon" />
                                <span class="art-PostHeader">Who uses our site?</span>
                            </h2>
                            <div class="art-PostContent">
                                
                                    
                                   
<p align="justify">This site can help you to interact with the seniors and get appropriate information regarding books and nearby restaurants. Moreover, it will also have a Question Bank section where the freshers can have a list of the previous year question years. Besides these, along with other helpful features, this will remove the confusion which goes in a fresher mind and make their life in the college easier and more productive.
</p>
                                  
                                                                     
                                	<p>
                                		<span class="art-button-wrapper">
                                			<span class="l"> </span>
                                			<span class="r"> </span>
                                			<a class="art-button" href="javascript:void(0)">Join&nbsp;Now!</a>
                                		</span>
                                	</p>
                                    
                            </div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                    </div>
                    <div class="art-sidebar1">
                        <div class="art-Block">
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-BlockContent">
                                    <div class="art-BlockContent-tl"></div>
                                    <div class="art-BlockContent-tr"></div>
                                    <div class="art-BlockContent-bl"></div>
                                    <div class="art-BlockContent-br"></div>
                                                                           <span class="art-button-wrapper">
                                        	<span class="l"> </span>
                                        	<span class="r"> </span>
                                        	
                                        </span>
                                        </form></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                                       <div class="art-sidebar1">
                        <div class="art-Block">
                            
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-tl"></div>
                                    <div class="art-BlockContent-tr"></div>
                                    <div class="art-BlockContent-bl"></div>
                                    <div class="art-BlockContent-br"></div>
                                    <div class="art-BlockContent-tc"></div>
                                    <div class="art-BlockContent-bc"></div>
                                    <div class="art-BlockContent-cl"></div>
                                    <div class="art-BlockContent-cr"></div>
                                  
                                        
                                        
                                        <script type="text/javascript">
										function check(f)
										{
											if(f.uid.value=="")	
											{
												document.getElementById("spuid").innerHTML="Please,Enter the user id ";
												//alert("Please,Enter Your User Id")
												f.uid.focus()
												return false;
												}
											else if(f.pwd.value=="")
												{
													document.getElementById("a").innerHTML="Please,Enter the password";
													//alert("Please,Enter Your Password")
													f.pwd.focus()
													return false;
													
													}	
												
												else
												return true;
											}
										
										
										</script>
                                        <form action="loginH.php" method="POST" onsubmit="return check(this)">
<table>
<tr><td>Username:</td></tr><tr><td><input type="text" name="uid"><span id='spuid' style="color: red;"></span></td></tr>
<tr><td>Password:</td></tr><tr><td><input type="password" name="pwd"><span id='a' style="color: red;"></span></td></tr>
<tr><td><input type="submit" value="login">  


<a href="register.php"><input type="button" value="Sign Up"></a></td></tr>

</table>

<?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Invalid User Id / password";
				
?>

</form>

                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <div class="cleared"></div><div class="art-Footer">
                    
                    <?php require("footer.php")?>