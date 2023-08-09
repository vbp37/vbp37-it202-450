<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 API Project</td></tr>
<tr><td> <em>Student: </em> Vivek Patel (vbp37)</td></tr>
<tr><td> <em>Generated: </em> 8/8/2023 8:06:24 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone-3-api-project/grade/vbp37" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes just to be up to date</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> API Data Association </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Consider how your API data will be associated with a user</td></tr>
<tr><td> <em>Response:</em> <p>The API data will realte and be associated with the user with the<br>create_joke.php because it manually allows the user to create their own joke, and<br>that is associated with their username. Also in the searchJokes.php page this can<br>be seen when a user is searched and the jokes associated with their<br>usernames specifically will be displayed.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Handling Data Changes</td></tr>
<tr><td> <em>Response:</em> <p>In my API the only way the entity changes is when the joke<br>is removed via the removeJoke.php page, and it can be accessed with the<br>Edit API Joke navigation link only by the admin. The user can also<br>see this changes when using the viewjokes.php page because that joke will not<br>longer be displayed. Also if the user of that joke is searche that<br>joke will no longer be associated with them.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Handle the association of data to a user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Which option did you need to do to handle the association of data?</td></tr>
<tr><td> <em>Response:</em> <p>The searchJokes.php page will allow other users to see entities associated with other<br>users. Also the viewJokes.php or viewAPIJokes.php page will allow users to see other<br>peoples jokes as well as their own. They can&#39;t edit or remove these<br>jokes unless they are admin. The admin has special permission to delete any<br>joke.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots of the updated/created pages related to associating data with the user (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T23.47.26image.png.webp?alt=media&token=c59d2266-a3ff-4a50-bad9-cf79371ca6ba"/></td></tr>
<tr><td> <em>Caption:</em> <p>A joke is ready to be created and submitted by a user named<br>jokester123. This joke will now be associated with that user.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T23.47.49image.png.webp?alt=media&token=965061ea-04e5-4739-9341-49a9bcd517c4"/></td></tr>
<tr><td> <em>Caption:</em> <p>The table before that joke is added. You can see that joke s<br>not yet in the table since we have not yet submitted.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T23.49.12image.png.webp?alt=media&token=d2bbbd34-a4ee-43cc-876b-300d325a3e37"/></td></tr>
<tr><td> <em>Caption:</em> <p>A message displaying that the joke is successfully submitted.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T23.50.22image.png.webp?alt=media&token=0051cbf0-98a0-4370-8768-78363b8fc26b"/></td></tr>
<tr><td> <em>Caption:</em> <p>The joke is now added to thet able you can see at the<br>bottom it matches the new joke and has that username.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T23.52.16image.png.webp?alt=media&token=0e44f5da-b4e6-4dcc-b6e0-8b6898bebfb8"/></td></tr>
<tr><td> <em>Caption:</em> <p>In the viewjokes.php file at the bottom you can see the new joke<br>now added.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-09T00.03.16image.png.webp?alt=media&token=46fa3eae-b36f-49d8-82da-fb08f4058fbd"/></td></tr>
<tr><td> <em>Caption:</em> <p>removeJoke.php that allows you to remove the joke so once deleted it is<br>no longer associated witht user.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-09T00.04.30image.png.webp?alt=media&token=28b3bc07-1f88-47ca-a4bd-cd4e8fa5ac55"/></td></tr>
<tr><td> <em>Caption:</em> <p>The table after the joke is delted you can see it no longer<br>in the table.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Include any Heroku prod links to pages that would trigger entity to user association</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vbp37-prod.herokuapp.com/Project/create_joke.php">https://vbp37-prod.herokuapp.com/Project/create_joke.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/61">https://github.com/vbp37/vbp37-it202-450/pull/61</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Logged in user’s associated entities page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What is the data that's associated with the user?</td></tr>
<tr><td> <em>Response:</em> <p>Data associated user includes the create_joke.php where users can create their own specific<br>jokes with a setup and punchline. The user have to put in a<br>username as well, and as a result that joke becomes associated with that<br>specific username in the table. Also when the jokes are searched in the<br>searchJokes.php page, the jokes are filtered by username.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show screenshots of the logged in user's entities associated with them  (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T21.09.34image.png.webp?alt=media&token=fa0af229-856a-422e-afcd-743983d9e694"/></td></tr>
<tr><td> <em>Caption:</em> <p>viewjokes.php file that displays all jokes in the DadJoke table. This includes jokes<br>by user and API. the ones without any creator are from API and<br>the ones with a username are created by a user.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T21.13.55image.png.webp?alt=media&token=07a78653-369f-407c-9192-f3711fbc9d70"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the DadJoke table. You can the jokes in this table match<br>the ones on the viewjokes.php page. The columns with NULL values are from<br>API, and the ones with users are made by a user.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T21.17.05image.png.webp?alt=media&token=4c962b08-ce7c-4097-a1f1-04e73af30542"/></td></tr>
<tr><td> <em>Caption:</em> <p>viewAPIjokes.php. This page is specifically for jokes we get from the API. There<br>is no creator after punchline becuase the jokes from API does not have<br>a username.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T21.24.59image.png.webp?alt=media&token=5101f45b-7492-48ea-ae2e-b2660e787fa6"/></td></tr>
<tr><td> <em>Caption:</em> <p>code for viewjokes.php file shows that we use the getDB() function. We select<br>the setup, punchline from the DadJoke table and it is then dispalyed with<br>html code.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T21.26.44image.png.webp?alt=media&token=83d6b22c-158f-44a3-8ab9-f4b7fd3fa896"/></td></tr>
<tr><td> <em>Caption:</em> <p>code from viewAPIjokes.php file where on line 16 &quot;SELECT setup, punchline, username FROM<br>DadJokes WHERE username is NULL) the NULL for username refers to API jokes<br>since they have no user so only API jokes are displayed.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T23.18.20image.png.webp?alt=media&token=5dbb9bdf-db7e-4af6-828f-e3c916cc736a"/></td></tr>
<tr><td> <em>Caption:</em> <p>searchJokes.php allows the user to search for jokes by inputting username, and the<br>the joke associated with that username is sleected and displayed to the user.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T23.31.11image.png.webp?alt=media&token=7d960967-ce3e-45f2-8693-e9b1bb5171b4"/></td></tr>
<tr><td> <em>Caption:</em> <p>the username vbp37 is inputted and a joke is retrieved and displayed.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T23.32.12image.png.webp?alt=media&token=5711956a-0d68-40ed-a8d4-53d94d097d06"/></td></tr>
<tr><td> <em>Caption:</em> <p>In the table we can see only one joke was made by vbp37<br>and it matches the screenshot shown.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T23.34.28image.png.webp?alt=media&token=e339352f-e7b6-4f1c-a3f3-acb3a2b9e356"/></td></tr>
<tr><td> <em>Caption:</em> <p>You can in the searchJokes.php file that the page is only accessible by<br>the user. We make an http request for a post method on line<br>12 since the user is inputting the username.We use the getDB() function and<br>SELECT the rows called setup, punchline from the DadJoke table WHERE the username<br>= :username which means the text in the username column matches the inputted<br>username.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) where the logged in user has their entities listed</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vbp37-prod.herokuapp.com/Project/viewAPIjokes.php">https://vbp37-prod.herokuapp.com/Project/viewAPIjokes.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vbp37-prod.herokuapp.com/Project/viewjokes.php">https://vbp37-prod.herokuapp.com/Project/viewjokes.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/63">https://github.com/vbp37/vbp37-it202-450/pull/63</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/73">https://github.com/vbp37/vbp37-it202-450/pull/73</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> All Users association page (Note: This will likely be an admin page and is not the same as the previous item) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe/Explain the purpose of this page from your project perspective</td></tr>
<tr><td> <em>Response:</em> <p>I have a removeJoke.php page that only allows admin to remove jokes from<br>the DadJoke table. Also a searchJoke.php file that allows user to search for<br>jokes based on username this page is not admin only it is available<br>for all logged in users.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show screenshots of the entity data associated with many users (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T21.54.56image.png.webp?alt=media&token=2bfa649f-6138-4843-a9d2-12b21f3fa0c3"/></td></tr>
<tr><td> <em>Caption:</em> <p>removeJoke.php file that allows onyl admin to remove joke from table and when<br>removed is displayed on site.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T21.55.47image.png.webp?alt=media&token=8fc7fc37-102e-4ba8-a5ab-47ca121f85f6"/></td></tr>
<tr><td> <em>Caption:</em> <p>DadJoke table, that shows the joeks notice the first joke matches the first<br>joke in the removeJoke.php, we will remove that and show the table after.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T21.56.53image.png.webp?alt=media&token=d5311c70-9f1f-4218-8a92-dcfa3c41ac53"/></td></tr>
<tr><td> <em>Caption:</em> <p>removeJoke.php after the first joke is deleted in can no longer be seen<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-08T21.57.43image.png.webp?alt=media&token=5896dbab-18a5-47c8-bb8f-8997bbc8e638"/></td></tr>
<tr><td> <em>Caption:</em> <p>DadJoke table that shows the first joke has been removed.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) where entities associated to many users can be seen</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vbp37-prod.herokuapp.com/Project/admin/removeJoke.php">https://vbp37-prod.herokuapp.com/Project/admin/removeJoke.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/66">https://github.com/vbp37/vbp37-it202-450/pull/66</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Create a page that shows data not associated with any user (Note: This will likely be an admin page and is not the same as the previous item) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show screenshots of the page showing entities not associated with anyone (include code screenshots)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add Heroku Prod links to the page(s) where unassociated entities can be seen</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Include any PRs related to this task</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Admin can associate any entity with any users (Note: This may be a form on an existing association page if you rather not have a separate page for this) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing evidence of the checklist items (include code screenshots)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the code logic for this page</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) related to this task</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Reflection </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Document any issues/struggles</td></tr>
<tr><td> <em>Response:</em> <p>Struggles<div>-Trouble caching API data into the DadJoke table with the manage_joke_data.php file. (Was<br>later resolved b y just caching from the dadjoke.php file since the dadjoke.php<br>was alreayd able to successfully retrieve the Setup and punchline in the html<br>code, and just used that to put the setup and punchline in the<br>table, however this meant that joke_id would not be retrieved and put in<br>the table.)</div><div>- Had trouble with the API handling at the beginning due to<br>issues with the API Key&nbsp; had similar issues wite the heruko dev when<br>trying to submit Milestone2 because the the API handling would not occur in<br>heruko dev. (Issue was resolved thanks to help from the professor).&nbsp;</div><div>-Had other issues<br>with just figuring out how to retrieve some data from the DadJoke table<br>for the view users joke and view Api jok page however did some<br>research and learned a simpler way. I was trying to do an If<br>state in the viewAPIjoke.php file where if the username was null in would<br>display the jokes but learned that I can just use the WHERE command.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Highlight any favorite topics</td></tr>
<tr><td> <em>Response:</em> <p>My favorite topics had to do more with the SQL code. I am<br>more interested and better in SQL so It was better for me to<br>that portion. Also I am interested in Data analysis and am currently minoring<br>in it so retrieving data and&nbsp; inserting data in db was fun to<br>do. Also since the sql code was similar in many files and it<br>was onyl one table it was code practice for me. Using form&nbsp; and<br>the post method&nbsp; for user inputs was also fun to do for me<br>because it also ties in the SQL code since the inputed data is<br>then used to retrieve stuff from the database.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Overall how do you feel you did with the project and meeting requirements</td></tr>
<tr><td> <em>Response:</em> <p>I did better in the project than I though I would especially compared<br>to 3-4 weekd ago. I couldn&#39;t even get the API data before. However<br>after that hurdle was overcame I was able to add a lot more.<br>I was really proud of the view jokes pages, create_jokes,&nbsp; searchJokes pages, and<br>removeJokes page since they were an important part of my project and they<br>required me to not just following the professors template but to work on<br>my own and do my own work to do.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Summarize your experience per the checklist items</td></tr>
<tr><td> <em>Response:</em> <p>#1 When I came into the class I had some development experience. I<br>took IT202 previously before in the Fall when I had almost no experience.<br>However the next I took 3 coding classes IT491 being one of them,<br>and those classes definitly help. Im not that good in web development luckily<br>many of the foles in this class required php code that was very<br>similar to each other. Also the SQL code which I am better in<br>was very present in this course, and also the same SQL code was<br>used in many of the files since it was selected specific rows and<br>using WHERE to determine the column.&nbsp;<div>#2 My current experience now has definetly improved<br>because like I previously mentioned we used a lot of the same php<br>code in multiple files, and doing that over and over familiarized me with<br>it. I still obviously require a lot of documentation guidance, but I am<br>more confident in my coding abilits than when I originally started.</div><div>#3 What I<br>would do differently is not spend so much time on my manage_joke_data.php to<br>cache the API data into the DadJoke table because I couldn;t have just<br>done it from the dadjoke.php file instead which required a few lines of<br>code. I was able to successfully cache the setup and punchline of the<br>joke in the DadJoke table but spend an entire week on manage_joke_data.php when<br>I could&nbsp; have saved the time.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone-3-api-project/grade/vbp37" target="_blank">Grading</a></td></tr></table>