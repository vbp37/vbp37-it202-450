## Project Name: (API Project: DadJokes)
### Project Summary: (Copy from proposal)
### Github Link: (Prod Branch of Project Folder)
### Project Board Link: 
### Website Link: (Heroku Prod of Project folder)
### API Link: https://rapidapi.com/KegenGuyll/api/dad-jokes/
### Vivek B.Patel
### UCID - vbp37


 
 
### Proposal Checklist and Evidence

- Milestone 1
  - (link for updated Milestone1) https://github.com/vbp37/vbp37-it202-450/blob/Milestone1Corrections/public_html/Project/milestone1.md


        # **User Account Management**

        ## **User Registration**

        - **Form Fields:**
        - **Username, email, password, confirm password** (other fields optional).
        - **Email is required and must be validated**.
        - **Username is required**.
        - **Confirm password must match**.
        
        - **Users Table:**
        - **Fields:** Id, username, email, password (hashed, 60 characters), created, modified.
        - **Password must be hashed** (plain text passwords will lose points).
        - **Email should be unique**.
        - **Username should be unique**.
        - System should inform the user if username or email is taken and allow correction without clearing the form.
        - Only password fields may be cleared.

        ## **User Login**

        - **Form:**
        - **User can log in with email or username** (single field or two separate fields).
        - **Password is required**.
        - **Friendly error messages for non-existent accounts or incorrect passwords**.
        - **Fetch user's details (including roles) and save them in the session**.
        
        - **User directed to a protected landing page upon login** (home, profile, dashboard, etc).

        ## **User Logout**

        - **Logging out redirects to the login page**.
        - **User sees a successful logout message**.
        - **Session is destroyed to prevent back-button access**.

        ## **Basic Security Rules**

        - **Authentication:**
        - **Function to check if the user is logged in**.
        - **Call the function on appropriate pages allowing only logged-in users**.
        
        - **Roles/Authorization:**
        - **Roles table:** id, name, description, is_active, modified, created.
        - **User Roles table:** id, user_id, role_id, is_active, created, modified.
        - **Include a function to check if a user has a specific role**.

        ## **Styling and User Experience**

        - **Apply basic styles/theme throughout the site** (forms/inputs, navigation bar, etc).
        - **Display user-friendly output messages/errors**.
        - **Avoid showing technical errors or debug output**.

        ## **User Profile Management**

        - **View Profile:**
        - **Display user's email, username, etc**.
        
        - **Edit Profile:**
        - **Check username/email availability before allowing changes**.
        - **Validate other fields properly**.
        - **Allow password reset (only with correct existing password, similar to login)**.

- Milestone 2
  - https://github.com/vbp37/vbp37-it202-450/blob/prod/public_html/milestone2.md


        Deliverables:
            
            **Highlight and Bold: Define Appropriate Tables for API Data**

            - Use the following core columns: id, created, modified.
            - Additional columns for incoming API data.
            - Avoid storing API result as plain text, use data mapping.
            - Distinguish manual and API data using a separate column.
            - Consider access roles for data creation (admin or any user).

            **Data Creation Page**

            - Form with correct data types and validation.
            - Handle duplicate content gracefully.
            - Show appropriate message on successful creation.
            - Display user-friendly error messages.
            - Manual and API entities in the same table.
            - Use an indicator column for manual/API distinction.

            **Data List Page (Many Items)**

            - List both API-generated and custom entities.
            - Define access roles and user login requirements.
            - Logical filtering and sorting options.
            - Include field to limit records (1 to 100) with server-side validation.
            - Handle "No results available" message.
            - Display summary info for each list item.
            - Include links: single view, delete, edit.
            - Apply chosen design/style.

            **View Data Details Page (Single Item)**

            - Fetch entity by ID from URL query parameters.
            - Redirect on invalid ID with appropriate message.
            - Apply design/style.
            - Display detailed data compared to list view.
            - Links: edit, delete.

            **Edit Data Page**

            - Fetch entity by ID from URL query parameters.
            - Redirect on invalid ID with message.
            - Form similar to Create page.
            - Prefill with existing entity info.
            - Correct data types and validation.
            - Show update success message.
            - Display updated data in form.
            - User-friendly error messages.

            **Delete Handling**

            - Fetch entity by ID from URL query parameters.
            - Redirect on invalid ID with message.
            - Handle roles/permissions for deletion.
            - Examples: self-created, admin-only, self-associated.
            - Consider hard or soft delete.
            - Redirect to previous page after successful deletion.
            - Preserve filter/sort in redirects.

            **API Handling**

            - Fetch API data server-side.
            - Transform API data to match table structure.
            - Decide on using all data or subset.
            - Handle duplicate entries.
            - Manage updates to existing entities.
            - Handle manual updates to API data.
            - Define triggers: periodic, user, admin.


        Branch Name: CachingAPI-DATA

        File name: example_mapping.php, manage_joke_data.php, cats.php(renamed to dadjoke.php) and etc.

        Description: Attempt at trying to cache API data to DadJoke table.

        Pull request  merge to Milestone2: https://github.com/vbp37/vbp37-it202-450/pull/45/files



        Branch Name: JokeProfiles
        File name: Joke_profile.php (renamed to removeJokes.php)

        Description: public_html/Project/admin/jokeprofile.php => Used the professor template for public_html/Project/admin/cat_profile.php. The fetch_images and toggle_image function is removed since the dad jokes don’t come with an image. Empty since API data caching is not working.

        Pull request  merge to Milestone2: https://github.com/vbp37/vbp37-it202-450/pull/60


        Branch Name: UserJokes

        File name: create_joke.php
        
        Description: Allows users to create their own Joke and submit it with a setup, punchline, and submitting their username. The joke is then inserted into the DadJoke sql table.

        Pull request merge to Milestone2: https://github.com/vbp37/vbp37-it202-450/pull/61


        Branches Name: AddingImagesToSite

        File name: Edited create_joke.php, home.php, dadjoke.php

        Description: Adding images and gifs to the following pages above to make the website look better.

        Pull request merge to Milestone2:  https://github.com/vbp37/vbp37-it202-450/pull/62


        Branches Name: dev

        File name: edited dadjoke.php

        Description: Found a way to cache API data to DB using only dadjoke.php. Instead of caching all the data we just use the setup and punchline.

        Pull request merge to Milestone2: https://github.com/vbp37/vbp37-it202-450/pull/72



        Branches Name: ViewJokes

        File name: viewjokes.php

        Description: Added viewjokes.php page that will allow users to view current jokes in the database by retrieving the setup, punchline and username from the DadJoke table.

        Pull request merge to Milestone2: https://github.com/vbp37/vbp37-it202-450/pull/63



        Branch Name: viewJokesAPI (created from dev instead of Milestone3)

        File name: viewAPIjokes.php

        Description: copied the viewjokes.php file and edited it to only select columns where the username is NULL. username being NULL indicates that it is a joke from the API since the API jokes don’t give a username.

        Pull request merge to dev: https://github.com/vbp37/vbp37-it202-450/pull/73


- Milestone 3
  - (add link to milestone3.md from milestone3 branch)
- Milestone 4
  - (add link to milestone4.md from milestone4 branch)
- Demo Link
  - https://www.youtube.com/watch?v=lGGB_InKFmA
