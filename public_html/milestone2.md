<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 API Project</td></tr>
<tr><td> <em>Student: </em> Vivek Patel (vbp37)</td></tr>
<tr><td> <em>Generated: </em> 8/4/2023 8:36:52 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone-2-api-project/grade/vbp37" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Define the appropriate table or tables for your API </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the table definition SQL files</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T01.23.38image.png.webp?alt=media&token=5a73b140-1122-4626-8663-1e97dc7bb54a"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the first half of the manage_joke_data.php that is suppose to take<br>the response from the api and manage it before being placed in our<br>database. As you can see from the INSERT TO command and the data<br>is supposed to be placed in joke_id, setup, punchline, created. You can also<br>see us use stmt-&gt;bindvalue and bind the columns we plan on using to<br>the appropiate data from the APi on lines 34-36 <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T01.33.37image.png.webp?alt=media&token=6aaa803f-8414-4f90-a91e-3bc6af26fb82"/></td></tr>
<tr><td> <em>Caption:</em> <p>In this vscode you can see second half of manage_joke_data.php which is the<br>rest of the code. Here you can see the processJokes function which takes<br>the data from the api and decodes it. On line 56 you see<br>    $data = json_decode($jokeData[&quot;response&quot;], true); which takes the jokeData which<br>is the joke given by the api, and takes the response key which<br>contains the body key that has all the data we want to store<br>in our database.<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T01.38.26image.png.webp?alt=media&token=69a88e0d-e901-4e3c-97f9-13011a34b81e"/></td></tr>
<tr><td> <em>Caption:</em> <p>the mysql code for my DadJoke table. Id, joke_id, setup, punchline, and create<br>can be seen .<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T01.24.48image.png.webp?alt=media&token=ccfda4f7-4cad-40cc-9769-2c7ac73a4287"/></td></tr>
<tr><td> <em>Caption:</em> <p>In this page in heruko dev we have a create_joke.php page that allows<br>the user to create  joke, a joke has already been filled out<br>above and in another image you will be able to see it in<br>the DadJoke table in vscode.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T01.28.14image.png.webp?alt=media&token=c44a74c2-9484-481c-89c0-1ef2cd8d69f2"/></td></tr>
<tr><td> <em>Caption:</em> <p>DadJokes table that is supposed to save dadjokes given by API. Currently only<br>jokes created by the user can be displayed in the database. You can<br>see the joke we created in the previous screenshot shown in the fifth<br>row with the id of 5. The joke_id column is null because currently<br>only user created jokes are being accepted into the database, and they don&#39;t<br>have a joke_id only the api jokes are given a joke_id from the<br>ap. The table also shows username column but only user created jokes will<br>allow usernames. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T01.34.21image.png.webp?alt=media&token=74f94f87-2ea7-4b2d-85cf-0a266eb85a84"/></td></tr>
<tr><td> <em>Caption:</em> <p>At the top of the page where I highlighted the response from the<br>api, you can see a response key, and within the response key there<br>is a body key which contains the setup, and punchline from the api<br>that was supposed to be put into the DadJoke table. The code doesn;t<br>work but the output above shows that the joke is within the body<br>key in response which is written in the manage_joke_data.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mappings</td></tr>
<tr><td> <em>Response:</em> <p>The main table is the DadJoke table. It has a id column that<br>is auto incremented with each data that is inserted into the table. The<br>joke_id is supposed to come from the Dad Joke API since the api<br>gives each joke a specific id. The setup column is the first part<br>of the joke from the API. The punchline column is the second part<br>of the joke from the API. The created column is set to when<br>the joke is created and in the manage_joke_data.php it is set to NOW().<br>The username column is only for user created jokes created by the user<br>the API jokes do not have username.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/45">https://github.com/vbp37/vbp37-it202-450/pull/45</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/46">https://github.com/vbp37/vbp37-it202-450/pull/46</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/47">https://github.com/vbp37/vbp37-it202-450/pull/47</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Data Creation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the Page and the Code (at least two)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T02.18.39image.png.webp?alt=media&token=0df073b5-a600-4b76-b94e-1a9730182a43"/></td></tr>
<tr><td> <em>Caption:</em> <p>Current code for my removeJoke.php page this page is only accessible by admin<br>and allos admin to edit the DadJoke databse and delete jokes. The jokes<br>will be displayed on the page and an option to remove joke is<br>present.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T23.34.04image.png.webp?alt=media&token=07671362-da94-4299-a21e-b68604dae2a1"/></td></tr>
<tr><td> <em>Caption:</em> <p>removeJoke.php page that allows admin to remove joke from database. I am going<br>to remove the last joke.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T23.34.23image.png.webp?alt=media&token=934b7ee0-5319-4860-bf94-b30066dd5e66"/></td></tr>
<tr><td> <em>Caption:</em> <p>removeJoke.php after remove is selected for the last joke. You can see that<br>only 3 jokes are left.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T23.33.12image.png.webp?alt=media&token=f26b5217-61c6-487c-9cdd-695deef7469b"/></td></tr>
<tr><td> <em>Caption:</em> <p>DadJoke database with 4 jokes before it is removed.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T23.34.47image.png.webp?alt=media&token=5029c74d-f4e0-4f64-bf1f-5f778bea5b79"/></td></tr>
<tr><td> <em>Caption:</em> <p>DadJoke  table after the joke is removed you can see that only<br>3 jokes remain just like in the heruko dev screenshot after the joke<br>is removed.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Database Results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T02.13.56image.png.webp?alt=media&token=a06dfff1-9625-4d5c-b93c-9a379ce27b5a"/></td></tr>
<tr><td> <em>Caption:</em> <p>User created jokes that were saved into the DadJoke table can be retrieved<br>and displayed on the viewjokes.php page. Part of manual created data.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T02.18.18image.png.webp?alt=media&token=ec4567c7-6b17-4f3d-a9c1-a58ebcef9c33"/></td></tr>
<tr><td> <em>Caption:</em> <p>DadJokes table that reinforces that stuff on the viewjokes.php page is retrieved from<br>the DadJokes table.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T02.20.30image.png.webp?alt=media&token=d116bfaa-f6a9-40aa-ad7f-e166e964b452"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code from create_joke.php that allows user to create their own joke. That can<br>be seen at the bottom from lines 41 to 48 with a form<br>method. Also, lines 19 to 25 shows how that user input is inserted<br>into the DadJoke table.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T02.25.29image.png.webp?alt=media&token=a3526bd5-105f-414e-a355-073ba1b847d4"/></td></tr>
<tr><td> <em>Caption:</em> <p>This image shows the dadjoke.php. While the Api data is not being stored<br>into the database, it still displays on the dadjoke.php page. It also shows<br>the setup, punchline since the APi breaks apart the joke into a setup<br>portion and punchline portion.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Misc Checklist</td></tr>
<tr><td> <em>Response:</em> <p>My entities are unique because the data is jokes that are being given<br>by API that are from the internet created by users.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vbp37-prod.herokuapp.com/Project/dadjoke.php">https://vbp37-prod.herokuapp.com/Project/dadjoke.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/45">https://github.com/vbp37/vbp37-it202-450/pull/45</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/61">https://github.com/vbp37/vbp37-it202-450/pull/61</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/63">https://github.com/vbp37/vbp37-it202-450/pull/63</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Data List Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot the list page and code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T23.39.24image.png.webp?alt=media&token=1fefef3d-10ca-4c15-9ded-f341e8f9b474"/></td></tr>
<tr><td> <em>Caption:</em> <p>viewjokes.php allows the user to see all current jokes in the DadJokes table.<br>Since we can only add user created jokes to the table so far;<br>only user created joeks can be seen. The page displays the joke as<br>a setup, punchline, and then displays the reator name which is supposed to<br>be the username from the DadJoke table. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T23.42.26image.png.webp?alt=media&token=ec949a6b-d387-4038-b2ed-794ef2fcd2ec"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of DadJoke table from vscode to show that the jokes on the<br>viewjoke.php page matches the jokes in the DadJoke table. Also the setup, punchline<br>and username column can be seen which is what the viewjokes.php displays.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-04T23.46.23image.png.webp?alt=media&token=95f8b730-edaa-4cfd-b447-10f8c493f23c"/></td></tr>
<tr><td> <em>Caption:</em> <p>In the screenshot of my code from vscode you can see the viewjokes.php<br>file. the getDB() function is called on line 9 where my database information<br>is located. In line 11 you can the setup, punchline, and username column<br>selected from the DadJoke table.Line 13 fetches the data, and lines 22 to<br>24 displays the data.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>All users have access to the viewjokes page. The ability to remove jokes<br>with the removejoke page is only available for the admin. In the viewjokes<br>page all joeks from the DadJoke table should be displayed but since out<br>APi data is not being cached and saved to the DadJoke table only<br>the user created jokes from create_joke.php are being saved to the DadJoke table<br>so the viewjokes page displays those jokes.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vbp37-prod.herokuapp.com/Project/viewjokes.php">https://vbp37-prod.herokuapp.com/Project/viewjokes.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vbp37-prod.herokuapp.com/Project/admin/removeJoke.php">https://vbp37-prod.herokuapp.com/Project/admin/removeJoke.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/63">https://github.com/vbp37/vbp37-it202-450/pull/63</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/60/files">https://github.com/vbp37/vbp37-it202-450/pull/60/files</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> View Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Edit Data Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-05T00.08.55image.png.webp?alt=media&token=1048e947-ee01-4b89-8d22-ad875148e374"/></td></tr>
<tr><td> <em>Caption:</em> <p>removeJoke.php page that allows admin to remove joke from database. I am going<br>to remove the last joke.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-05T00.12.20image.png.webp?alt=media&token=ebcb4a66-f9f9-4570-9505-560c485f959f"/></td></tr>
<tr><td> <em>Caption:</em> <p>removeJoke.php after remove is selected for the last joke. You can see that<br>only 3 jokes are left.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-05T00.11.20image.png.webp?alt=media&token=19c5b15f-7a3f-4d18-b65f-c3f5c20854f6"/></td></tr>
<tr><td> <em>Caption:</em> <p>DadJoke database with 4 jokes before it is removed.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-05T00.12.40image.png.webp?alt=media&token=1d80ca03-d247-4fc9-91a4-e320c1d7e72a"/></td></tr>
<tr><td> <em>Caption:</em> <p>DadJoke  table after the joke is removed you can see that only<br>3 jokes remain just like in the heruko dev screenshot after the joke<br>is removed.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vbp37-prod.herokuapp.com/Project/admin/removeJoke.php">https://vbp37-prod.herokuapp.com/Project/admin/removeJoke.php</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/60/files">https://github.com/vbp37/vbp37-it202-450/pull/60/files</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/62">https://github.com/vbp37/vbp37-it202-450/pull/62</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/65">https://github.com/vbp37/vbp37-it202-450/pull/65</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Delete Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of related code/evidence</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-05T00.15.38image.png.webp?alt=media&token=6fb09846-5a26-49b3-bfc5-5ab8fa9018cd"/></td></tr>
<tr><td> <em>Caption:</em> <p>removeJoke.php page that allows admin to remove joke from database. I am going<br>to remove the last joke.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-05T00.16.06image.png.webp?alt=media&token=695c44ea-f045-48ea-a025-fa0dab8e1d90"/></td></tr>
<tr><td> <em>Caption:</em> <p>removeJoke.php after remove is selected for the last joke. You can see that<br>only 3 jokes are left.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-05T00.16.29image.png.webp?alt=media&token=1b33b30a-e98b-4481-99df-7089a2effa92"/></td></tr>
<tr><td> <em>Caption:</em> <p>DadJoke database with 4 jokes before it is removed.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-05T00.16.50image.png.webp?alt=media&token=35c183ea-c970-494d-95bd-25c0071927ea"/></td></tr>
<tr><td> <em>Caption:</em> <p>DadJoke  table after the joke is removed you can see that only<br>3 jokes remain just like in the heruko dev screenshot after the joke<br>is removed.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>#1 Only the admine has the ability to delte a joke from the<br>DadJoke table.&nbsp;<div>#2 I believe it is a hard delete since the data is<br>completely deleted from the DadJoke table and there is now way to retrieve<br>it.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/60/files">https://github.com/vbp37/vbp37-it202-450/pull/60/files</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/62">https://github.com/vbp37/vbp37-it202-450/pull/62</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/65">https://github.com/vbp37/vbp37-it202-450/pull/65</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> API Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of Code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-05T00.28.33image.png.webp?alt=media&token=6a25dcec-87ea-4464-ac07-e8c64095dcf0"/></td></tr>
<tr><td> <em>Caption:</em> <p>In the heruko dev screenshot above you can see my dadjoke.php page which<br>shows the data from the api being displayed with setup being the first<br>part of the joke retreived from the API. Punchline is also retrieved by<br>the APi and that is the seocnd part of the joke. The images<br>are not a part of the API they were just added to make<br>thr site look better.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T03.36.01image.png.webp?alt=media&token=ccfad88e-dd03-45fa-96c5-f16c6208f489"/></td></tr>
<tr><td> <em>Caption:</em> <p>VSCODE to show how I am planning to handle api data very similar<br>to professors code<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T03.36.57image.png.webp?alt=media&token=9de047db-fc85-49f3-a3a2-fd4bf2b765ea"/></td></tr>
<tr><td> <em>Caption:</em> <p>Second part of manage_joke_data.php which shows how api data is decoded and is<br>taken from the array provided by api and then using stmt-&gt;bindvalue thedata is<br>binded to variables in the sql table.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-08-05T00.32.25image.png.webp?alt=media&token=3791ec64-feef-4a15-b80a-0064041a2559"/></td></tr>
<tr><td> <em>Caption:</em> <p>my dadjoke.php which was made by using the professor cat.php template.  It<br>calls the API on line 8 and sets it the a variable called<br>jokeData. the setup and punchline of the joke is within the body key<br>which is within the body key, and 13-16 you can see the joke<br>being retrieved from within the biody key which is within the response key,<br>the response is set to a variable called response.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <div style="color: rgb(255, 255, 255); background-color: rgb(0, 0, 0); font-family: Consolas, &quot;Courier New&quot;,<br>monospace; line-height: 19px; white-space: pre;"><div><span style="color: #9cdcfe;">$jokeData</span> <span style="color: #d4d4d4;">=</span> <span style="color: #dcdcaa;">get</span>(<span<br>style="color: #ce9178;">"https://dad-jokes.p.rapidapi.com/random/joke"</span>, <span style="color: #ce9178;">"DADJOKE_API_KEY"</span>, [], <span style="color: #569cd6;">true</span>, <span style="color: #ce9178;">"dad-jokes.p.rapidapi.com"</span>);</div>### This<br>is how I am retreiving data from my API</div><div style="color: rgb(255, 255, 255);<br>background-color: rgb(0, 0, 0); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><div<br>style="line-height: 19px;"><br><div><span style="color: #569cd6;">function</span> <span style="color: #dcdcaa;">process_jokes</span>(<span style="color: #9cdcfe;">$jokeData</span>)</div><div>{</div><div>&nbsp; &nbsp; <span style="color: #7ca668;">//IT202-450<br>M23 VBP37 &nbsp;july 24 2023</span></div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$status</span> <span style="color: #d4d4d4;">=</span> <span<br>style="color: #9cdcfe;">$jokeData</span>[<span style="color: #ce9178;">"status"</span>];</div><div>&nbsp; &nbsp; <span style="color: #c586c0;">if</span> (<span style="color: #9cdcfe;">$status</span> <span style="color:<br>#d4d4d4;">!=</span> <span style="color: #b5cea8;">200</span>) {</div><div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #c586c0;">return</span>;</div><div>&nbsp; &nbsp; }</div><br><div>&nbsp;<br>&nbsp; <span style="color: #9cdcfe;">$data</span> <span style="color: #d4d4d4;">=</span> <span style="color: #dcdcaa;">json_decode</span>(<span style="color: #9cdcfe;">$jokeData</span>[<span style="color:<br>#ce9178;">"response"</span>], <span style="color: #569cd6;">true</span>);</div><div>&nbsp; &nbsp; <span style="color: #9cdcfe;">$jokes</span> <span style="color: #d4d4d4;">=</span> <span style="color:<br>#dcdcaa;">map_data</span>(<span style="color: #9cdcfe;">$data</span>[<span style="color: #ce9178;">"body"</span>]); </div><br><div>&nbsp; &nbsp; <span style="color: #dcdcaa;">error_log</span>(<span style="color: #9cdcfe;">$jokeData</span>[<span style="color:<br>#ce9178;">"response"</span>]);</div><br><div>&nbsp; &nbsp; <span style="color: #c586c0;">if</span> (<span style="color: #d4d4d4;">!</span><span style="color: #dcdcaa;">empty</span>(<span style="color: #9cdcfe;">$jokes</span>)) {</div><div>&nbsp;<br>&nbsp; &nbsp; &nbsp; <span style="color: #9cdcfe;">$db</span> <span style="color: #d4d4d4;">=</span> <span style="color: #dcdcaa;">getDB</span>();</div><div>&nbsp; &nbsp;<br>&nbsp; &nbsp; <span style="color: #dcdcaa;">insert_jokes_into_db</span>(<span style="color: #9cdcfe;">$db</span>, <span style="color: #9cdcfe;">$jokes</span>);</div><div>&nbsp; &nbsp; }</div><div>&nbsp; &nbsp;<br>### process_jokes shows how the jokedata is processed and decoded the data is<br>in the nested body keyw which is within the</div><div>the response key</div></div></div><div style="color: rgb(255,<br>255, 255); background-color: rgb(0, 0, 0); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px;<br>white-space: pre;"><br></div><div style="color: rgb(255, 255, 255); background-color: rgb(0, 0, 0); font-family: Consolas, &quot;Courier<br>New&quot;, monospace; line-height: 19px; white-space: pre;"><br></div><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/45">https://github.com/vbp37/vbp37-it202-450/pull/45</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What issues did you face and overcome during this milestone?</td></tr>
<tr><td> <em>Response:</em> <p>The main issues faced in this Milestone where most likely my inexperience when<br>it came to using API&#39;s . It took me many days to even<br>get a response and yesterday I finally got one. However now its seems<br>that it only works on localhost and doesn&#39;t work as much on prod.<br>However when I originall solved the issue with getting a response from API,<br>I simply just repasted the key from the api documentation. It was the<br>same exact key but for some reason this time it worked.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> What did you find the easiest?</td></tr>
<tr><td> <em>Response:</em> <p>The easiest ended up being getting a response from the API as all<br>I needed was to repaste the key and for some reason it worked.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> What did you find the hardest?</td></tr>
<tr><td> <em>Response:</em> <p>The harded has been trying to store the API data in the database.<br>I have been trying that for days not and seems to still be<br>an issue. However with help from the professor the issue did seem to<br>get narrowed down a little bit? Originally I was accessing just the response<br>key but I should have been accessing the body key within the response.g<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Did you have to utilize any unanticipated APIs?</td></tr>
<tr><td> <em>Response:</em> <p>No but I did change by API from the NBA API to the<br>dadjoke API a day after starting my project since I figured a simpler<br>API might be better since this is my first time trying this.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of your project board</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T03.30.04image.png.webp?alt=media&token=1d45940a-7806-4df0-a2be-91967d9ec82d"/></td></tr>
<tr><td> <em>Caption:</em> <p>Most items are still being worked on the issues do not seem to<br>be serious though just minor errors within each file.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone-2-api-project/grade/vbp37" target="_blank">Grading</a></td></tr></table>