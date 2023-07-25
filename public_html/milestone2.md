<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 API Project</td></tr>
<tr><td> <em>Student: </em> Vivek Patel (vbp37)</td></tr>
<tr><td> <em>Generated: </em> 7/24/2023 11:41:48 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone-2-api-project/grade/vbp37" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Define the appropriate table or tables for your API </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the table definition SQL files</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T01.14.58image.png.webp?alt=media&token=ed261350-d42f-43b7-aa3e-8aaae3f2fdfc"/></td></tr>
<tr><td> <em>Caption:</em> <p>DadJokes table that is supposed to save dadjokes given by API. The table<br>is currently empty due to issue with storing the data after API is<br>called. However the table does sue ID, as well as created. Modified was<br>not added but can be with alter table to include it. Also if<br>you look in the terminal you can see specifically what data is meant<br>to be stored. Within the data and within the response key there is<br>the &quot;body&quot; key where you can see the id of the joke as<br>well as the setup, punchline and date. joke_id refers to the id given<br>to the joke by the API, setup refers to the beginning of the<br>joke, and punchline is the end of the joke. Create refers to when<br>the joke is accessed which is why it is set to now in<br>the code.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T01.23.38image.png.webp?alt=media&token=5a73b140-1122-4626-8663-1e97dc7bb54a"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here is the first half of the manage_joke_data.php that is suppose to take<br>the response from the api and manage it before being placed in our<br>database. As you can see from the INSERT TO command and the data<br>is supposed to be placed in joke_id, setup, punchline, created. You can also<br>see us use stmt-&gt;bindvalue and bind the columns we plan on using to<br>the appropiate data from the APi on lines 34-36 <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T01.33.37image.png.webp?alt=media&token=6aaa803f-8414-4f90-a91e-3bc6af26fb82"/></td></tr>
<tr><td> <em>Caption:</em> <p>In this vscode you can see second half of manage_joke_data.php which is the<br>rest of the code. Here you can see the processJokes function which takes<br>the data from the api and decodes it. On line 56 you see<br>    $data = json_decode($jokeData[&quot;response&quot;], true); which takes the jokeData which<br>is the joke given by the api, and takes the response key which<br>contains the body key that has all the data we want to store<br>in our database.<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T01.38.26image.png.webp?alt=media&token=69a88e0d-e901-4e3c-97f9-13011a34b81e"/></td></tr>
<tr><td> <em>Caption:</em> <p>the mysql code for my DadJoke table. Id, joke_id, setup, punchline, and create<br>can be seen .<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mappings</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/45">https://github.com/vbp37/vbp37-it202-450/pull/45</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/46">https://github.com/vbp37/vbp37-it202-450/pull/46</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/47">https://github.com/vbp37/vbp37-it202-450/pull/47</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Data Creation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the Page and the Code (at least two)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T02.18.39image.png.webp?alt=media&token=0df073b5-a600-4b76-b94e-1a9730182a43"/></td></tr>
<tr><td> <em>Caption:</em> <p>Current code for my joke_profile page which is based off of the professors<br>cat_profile.php. Currently still working on it due to database not caching properly.<br>In the<br>code you can that only an admin can have access to this page<br>it suses the processJokes () function on line 17 which was previously created<br>in manage_joke_data.php which managed the api data. Current error seems to be the<br>redirect function being undefined. not sure why since the professor uses it in<br>his example but it works in there.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T02.29.33image.png.webp?alt=media&token=f4423d50-e44b-4ce5-997f-e1b54afac6ee"/></td></tr>
<tr><td> <em>Caption:</em> <p>Current joke_profile.php page on heruko dev the current error seems to be the<br>redirect function on line 9<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T02.31.22image.png.webp?alt=media&token=cd6dcc8e-ea1a-4646-a672-b8af2248f43b"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screenshot is just meant to show that the admin role is still<br>working, and to show that a joke_generator navigation link was added which takes<br>the user to cat.php which is the page that displays the dad jokes<br>generated by API<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Database Results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T03.11.20image.png.webp?alt=media&token=e8d3cb94-18c0-4e88-9926-8b3c820b9f01"/></td></tr>
<tr><td> <em>Caption:</em> <p>localhost of Api created data with the apigiving a joke the localhost is<br>being given because it works in localhost but for some reason it stopped<br>working it dev even though it was previously working<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T03.13.04image.png.webp?alt=media&token=dc031256-fe29-411e-940e-e3ae2f0af5e8"/></td></tr>
<tr><td> <em>Caption:</em> <p>the dev shows that it is not working or subscribed which is strange<br>because its the same code that was pushed to dev and same structure.<br>However the issue seems to be within the html which is a good<br>sign since that may mean that only the html is the issue not<br>the php. Also some changes were made last minute that may have affected<br>dev.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Misc Checklist</td></tr>
<tr><td> <em>Response:</em> <p>My entities are unique because the data is jokes that are being given<br>by API that are from the internet created by users.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vbp37-prod.herokuapp.com/Project/dadjoke.php">https://vbp37-prod.herokuapp.com/Project/dadjoke.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/45">https://github.com/vbp37/vbp37-it202-450/pull/45</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vbp37/vbp37-it202-450/pull/45">https://github.com/vbp37/vbp37-it202-450/pull/45</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Data List Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot the list page and code</td></tr>
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
<table><tr><td> <em>Deliverable 5: </em> Edit Data Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Delete Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of related code/evidence</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> API Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of Code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T03.32.52image.png.webp?alt=media&token=9e1ae99f-c004-4461-945e-3c5227f393e4"/></td></tr>
<tr><td> <em>Caption:</em> <p>Only showing localhost because the code seems to work on localhost but not<br>on dev. I will show dev as well so issues can be seen.<br>However you can see that the API response is occuring in localhost atleast.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T03.34.10image.png.webp?alt=media&token=42ec02f2-8d1b-46cc-a57f-c5e4c7a65a32"/></td></tr>
<tr><td> <em>Caption:</em> <p>Here in dev you can see that the api key seems to not<br>be accepted at all. It possible that when I rolled back my github<br>to get back previous changed it somehow effected my dadjoke.php page which caused<br> it to be rolled back to a point when my api_key was<br> not given properly.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T03.36.01image.png.webp?alt=media&token=ccfad88e-dd03-45fa-96c5-f16c6208f489"/></td></tr>
<tr><td> <em>Caption:</em> <p>VSCODE to show how I am planning to handle api data very similar<br>to professors code<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T03.36.57image.png.webp?alt=media&token=9de047db-fc85-49f3-a3a2-fd4bf2b765ea"/></td></tr>
<tr><td> <em>Caption:</em> <p>Second part of manage_joke_data.php which shows how api data is decoded and is<br>taken from the array provided by api and then using stmt-&gt;bindvalue thedata is<br>binded to variables in the sql table.<br></p>
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
<tr><td> <em>Response:</em> <p>The harded has been trying to store the API data in the database.<br>I have been trying that for days not and seems to still be<br>an issue. However with help from the professor the issue did seem to<br>get narrowed down a little bit? Originally I was accessing just the response<br>key but I should have been accessing the body key within the response.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Did you have to utilize any unanticipated APIs?</td></tr>
<tr><td> <em>Response:</em> <p>No but I did change by API from the NBA API to the<br>dadjoke API a day after starting my project since I figured a simpler<br>API might be better since this is my first time trying this.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of your project board</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fvbp37%2F2023-07-25T03.30.04image.png.webp?alt=media&token=1d45940a-7806-4df0-a2be-91967d9ec82d"/></td></tr>
<tr><td> <em>Caption:</em> <p>Most items are still being worked on the issues do not seem to<br>be serious though just minor errors within each file.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-450-M23/it202-milestone-2-api-project/grade/vbp37" target="_blank">Grading</a></td></tr></table>