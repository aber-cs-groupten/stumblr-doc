End-of-Project Report
=====================

Managment Summary
------------------

The project as a whole has achieved almost everything it set out to do. The app is in full working order and is well tested with only a few minor features missing, however they can easily be added at a later date. The missing features are that it is not possible to add multiple images to each waypoint, but this is because we missunderstood the specification until the last day of Integration and Testing week, at which time we had no time to change it (this is because we thought it meant that you needed multiple photos per route, not per waypoint). The website also works perfectly and has every feature specified in the requirements specification plus the added feature of a gallery at the bottom of every photo in a route.

All submitted documents were submitted on time and to appropriet standards regarding the Quality Assurance standards that have been put in place. All documents were checked for errors and were checked to ensure they contained the correct material for submission. After feedback was recieved on the initial document versions, changes were imediately implemented ready for final submission. 

The main difficulties experienced during the completion of this project were illness from group members, and the adverse affects the weather had on the number of workable days for the project. Over the course of the project around half of the group have missed meetings due to illness and although all work was later caught up on, full attendance of all meetings would have ensured higher efficiency throughout the project. The impact the weather had on the projects completion has been small, but only thanks to the work done to make up for missed time by group members.

As a whole the team performed fantastically, in general most team members pulled their weight and produced work of a good quality resulting in a well rounded and complete submission. A few team members throughout the course of the project did not however contribute to the submission as much as the rest of the group, which ended up resulting in them recieving a yellow card. A few other minor problems arose during the course of the project but they were dealt with quickly and didn't end up impacting the final quality of the submitted project.


A historical account of the project
-----------------------------------

The first thing the group did, with the assistance of our group manager, was decide on group roles, setting out who would be doing what based on their skills and experiences. We decided that Daniel would be the Group Leader because he had experience with leading a group as well as having extra time due to having only 50 credits in the first semester. The Assistant Group leader was decided to be Charlie because he was also enthusiastic about leading and was an experienced Java programmer, leading him to also be the Lead Android Developer.
Stephen voluneered then to be the lead Web Developer as he enjoyed working on web design and he was doing the web modules. The rest of the group memebers were then devided up into doing either Android or Web, based on where their skillset lied and which they prefered, except Mark who became the Quality Assurance (QA) manager.

Next we started to decide which parts of the initial documentation submission (the Project Plan) would be deligated to who. This resulted in most of the group recieving sections of the Project Plan to complete, whilst two of the group (Mark and Martin) were told to start work on writing out the Test Specification for the next deadline.
After the Project Plan submission was completed, the two who had been working on the Test Specification continued to work on that whilst the rest of the group started working on the first stages of the Design Specification.
When then the results for the Project Plan submission were released Mark was given the task to making the intial changes, but only for things that could be done quickly, leaving the harder things to be changed later in the project.

The Test Specification was then submitted after being Quality Assurance checked and some extra tests added after it was looked over by other members of the group. At this point the Design Specification was coming along nicely and now the two who were focussed on the Test Specifcation now joined the rest of the group in working different sections of the Design Specification.

After a few group meetings involving making some of the larger design decisions we eventually had a Design Specification that was ready for submission and so after being QA checked, it was submitted on time. This meant that everybody could now start coding and working towards a working prototype for the Prototype Demo. Stephen and Kieran were set to work together on making a statically generated version of the website to demonstrate what it would look like, whilst the rest of the group were given individual parts of the Android App to focus on and get working, e.g. Daniel was to work on getting Post Requests to his server working using JSON, Charlie was to allow the taking of photos, etc. The plan was then to merge all the working parts of the App together.

When the time came for the Prototype to happen Stephen had finnished the static website on his own, with minimal help from Kieran and most sections of the Android App were complete but the parts had not been merged together. The demonstration went well with the 'customer' commenting that no other group had got HTTP Posting working other than us at that stage. It was at this stage that it was decided to give Kieran his Yellow Card as up until this point he had not contributed anywhere near as much as others in the group.

After that we got the feedback on the Design Specification and Mark started work on making the changes needed whilst the rest of the group started on the finished products for both web and Android. After Mark had made the initial changes it was at this point that he volunteered to be in charge of the database interaction side of the web system, as using SQL and doing database work was relatively easy for him. This was also because he had noticed that the web side had not been progressing at the same rate as the Android development.

Over the Christmas holidays not much work happened on the web side, some slight UI changes not much else, whereas on the Android side each element had finally been merged into one united app. 

At the start of Integration and Testing week the Android app seemed very close to completion but the Web was still lagging behind, with still no facility for recieving HTTP POST requests. Throughout ITW Charlie, Martin and Daniel were focussing on adding features and fixing bugs in the Android code whereas Ashley was working on the User Interface and Kenny was doing continous testing on any new features to check for any bugs that got introduced during development. On the web side Stephen was working on getting the Website to be generated using data from the Database (with some help from Charlie at the end) whilst Mark worked on developing the Database and adding data to it from the HTTP Posts. Kieran was also given the task of redesigning the web interface and updating the docs, specifically the Test Specification so that we were clear which tests we passed and which tests we still needed to work on passing.

After ITW the entire group was working on documentation, most of the group was making the recommended changes to the previously submitted Docs whilst Daniel wrote the End of Project Report and Charlie compiled each section into one LaTeX document, doing Quality Assurance checking as he went. We realised at this point that a lot of the previous changes Kieran had made to the documentation were sub-satisfacotry and therefore it was decided not to revoke his Yellow Card.


Final State of the Project
--------------------------

Both sides of the delivered software package work almost perfectly to meet the delivered specifications as set out in the project documentation. 
The app contains functionality to create a walking tour containing the title, short description and long description for the route, as well as a title, description and photo for as many waypoints as the end user wants to create. The only point at which this strays from the set specification is we have not yet implemented the limit to restrict only single word titles for each walk.
The GPS coordinate for the tour are started gathering from the point at which the user finishes entering the general route details, then an extra set of cooridinates are attached to each waypoint created as part of the tour along with its Unix Epoch timestamp. When it comes to adding photos to the created waypoints, the user is promted whether they want to take a photo from their camera or add a photo which is stored in their phones gallery as per the specification, however due to an initial missunderstanding of the documentation only one photo is able to be added to each waypoint.
The route is able to be cancelled at any time by pushing the 'back' button on their phone, which will then promp them to whether or not they truly wish to cancel recording the route. Data sent to the server after final completion of each route is sent via an HTTP POST request containing a set of JSON key-value pairs with a MIME-Type of "application/json", the JSON format was chosen over the MIME format because the existing libraries for Android and PHP made the specifics of coding the POST request far simpler as well as JSON having the extra bennifit of being more human readable than just standard MIME. We informed the customer (Bernie Tiddeman) of this change during the design phase of development and he accepted the change. 
When the user decides to switch android applications the app will cache the stored data and reload it when the user restarts the app. This process will also handle when the users exits the app for long periods of time and the Android OS kills the App to save RAM. The apps service will also continue to run in the backgroud recording the GPS track even if the app does not have focus, meaning the user can continue to use the phone for other things whilst walking between waypoints and then restart the app when they decide to make a new waypoint.
On the web side of the software package the user is able to pick any uploaded route from the dropdown box and all the information about that route will be displayed to the user, the details of the route itself are displayed at the top of the page, whilst the details of each waypoint are stored within markers on an interactive map in the center of the page.
Once data has been succesfully recieved by the web server it will return a standard HTTP 200 code confirming that it recieved the data, or another code depending on what problem was encountered in the transmission. This will then be checked on the android app and an appropriet message will be displayed to the user regarding the success of the delivery, and if successful, they will be given the opprotunity to start a new route.


Performance of each team member
------------------------------

Daniel Clark - Group Leader
As a whole the duties taken on by the group leader were the organisation of the project, delegation of tasks, making sure that the team were happy and comfortable with their assigned work as well as ensuring that the project was progressing at the desired rate.
The group leaders attendance to all whole group meetings was ensured, however some group meetings only required attendance by each side of the programming team and thus the group leader did not always attend. Throughout Integration and Testing Week the group leader was present every day from 9-6 and made sure to supervise any problems the group was having and dealt with any problems involving members of the group that were not arriving on time. Throughout the project the group leader has also imputed inputted  significant amounts of functional code into the Android development as well as taking a large role into debugging and finding solutions to problems found by other members of the team on both the Android and PHP sides of development.
Throughout the project a significant degree of enthusiasm for the project has been maintained however post-Integration and Testing Week enthusiasm for the project started to lower as the deadline approached.
In general work produced by the group leader was to the standard expected by the rest of the group and all duties were taken care of appropriately. Despite this, the efforts of the Assistant Group Leader (Charlie Newey) to keep the project on course has compensated for some organisational shortfalls of the project leader throughout the later half of the project.
I(the group leader) as writer of this document, agree with the above self-appraisal


Charlie Newey - Assistant Group Leader and Lead Android Developer
The duties taken on by Charlie extend far further than the limits set out by his official project roles. Officially his role entails a lot of the group leaders responsibilities but to a lesser degree, as well as taking charge of the Android development and making sure that everyone within the Android coding team knew exactly what needed doing and which tasks they were assigned to. On top of maintaining a high quality of work in his official roles he also continued to support the group leader and compensate for any shortcomings he came across throughout the project. On top of the tasks he was assigned he has also made contributions to the Quality Assurance of both the documents and all parts of the code and spent a not-insignificant amount of time working with the team's Web developers to fix bugs and add features to that side of the project in any free time he had during Integration and Testing Week.
Charlie made attendance to almost every meeting of both the general group and the Android development meetings although he did sometimes turn up late. During Integration and Testing Week he consistently arrived an hour after the start to the day, but he always made up for this by spending extra hours in the evening working on the project. Charlie took one day at home during the week (but continued to do work) as he was expecting a large delivery but this was out of his hands as it had originally been organised to not clash with ITW, but the adverse affects of the weather delayed ITW by a week, thus causing the problem.
Charlie's enthusiasm for the project has been high all throughout the project often spending extra hours perfecting sections of work he had produced. His high enthusiasm seems to be driven by the desire for the entire group to receive over 70% for the project and he went out of his way to try and achieve this.
The quality of work produced by Charlie throughout the project has been strong, producing readable and complete sections for documentation when required, and producing a high quality of well documented code during Integration and Testing Week.
I, Charlie, agree with the above statement. Any time that had been lost to the project due to, I made every effort to make up.


Stephen Mcfarlane - Lead Web Developer
Stephen, as he had experience of PHP, was set the duties of writing the majority of the projects web side. He alone produced a working static version of the website for the prototype submission and during Integration and Testing Week adapted it to work with dynamic data pulled out of the database.
Stephen made it to all scheduled meetings before and after Integration and Testing Week, however during the early part of ITW he was at least 2 hours late on most days. Despite being late on some days during ITW, he always made the effort to make up work he'd missed during the evening so that his tasks were completed and up to date before the next morning, meaning that the project was not held back.
When it comes to Stephens attitude towards the project, he has continuously proven to be a consistent hard worker, every task set to him was completed on time and it was obvious to see the progress he was making as time progressed.
The code produced by Stephen for dynamically delivering the website to the user was completed to a good quality, however the JavaScript which was used in conjunction with the Google Maps API to display the route to the user could have been written in a tidier and more readable way. Towards the end of ITW Stephen was struggling with getting the last part of the website working, but after a code refactor and some help from Charlie, a solution was found. The parts of the documentation he wrote to go along with the project were complete and well written to a good standard. In general Stephen is very easy to work with and will always complete whatever he is given to the best of his ability.
I, Stephen, have read this and approve this report.


Mark Lewis - QA Manager and Web Developer
Marks original role was solely to be the QA Manager, a job that during the pre-Integration and Testing Week stages he did to a good standard, making sure that documents were completed to the correct standard before submission. When the group started working on getting the final code working however, Mark offered to lend a hand with the Web Development as he had some experience with working with SQL and the database side of things.
Mark made it to almost every meeting and took up the general role of writing the meeting minutes. If he was ever not able to attend, he notified me before hand and work was set remotely. During ITW Mark was often the first to arrive just before 9am and stayed until the end of the day.
When Mark realised that he could use his skills to benefit the group by working along side the other Web Developers and volunteering himself for the extra role it was obvious that he was motivated to make sure the project was a success and was completed on time.
In his role as QA manager Mark also spent time at the end of Integration and Testing Week improving the quality of the back-end web code to ensure it met the coding standards that had be set out.
Over every aspect of the project that Mark worked on he made sure to produce a quality piece of work. Even from the start, the minutes of each meeting were taken professionally without prior instruction, documents were QA checked before submission on time and his code was well written and well commented despite needing some occasional help from other group members.
Mark agrees with Dan's comments. 


Martin Ferris - Android Developer
Martin's role as an Android Developer throughout the project has lead to him producing a significant amount of the code for the Android App, as well as spending time at the end of the project finalising the document changes.
Throughout the project Martin's attendance has been fantastic, he turned up to virtually ever organised group meeting and made it to every day of Integration and Testing Week. The only problem in Martin's attendance was that he very rarely showed up on time for ITW, however that did get better as the week went on and he always made up for missed time in the evenings.
He has had a high level of enthusiasm throughout the project consistently finishing work and asking what needs to be done to improve the final product. Martin took the responsibility of writing the sets of JavaDoc comments for almost all of the Android code and got it ready for generating the final HTML JavaDoc. He also did work on building the UI for some of the screens working with Android Studio and directly with the XML. He is often willing to go the extra mile in ensuring documents are completed on time for a deadline and that feedback from the customer is appropriately dealt with.
The quality of work the Martin produces is consistently of an acceptable standard in both code and documentation. Although at times he struggled in fixing bugs and implementation problems in the code, but with minimal guidance he eventually worked through every problem.
Generally Martin is very easy to work with and, with the right support, will produce quality solutions to problems.
I, Martin, have read this report and approve of Daniel's comments.


Ashely Iles - Android Developer
The role set out for Ashley initially was to be one of the Android Developers and out of everyone he stuck to his role the most.
His attendance through all of the official meetings was generally very good, however he missed some of the non-official meetings. This was never however due to him being unenthusiastic, it was because the meetings were always organised via Facebook and Ashley has never been a strong Facebook user. Ashleys attendance during Integration and Testing week was not fantastic, often turning up late and on one day, not at all, however he did partially make up for that by staying late one one night to make some final changes.
Pre-ITW Ashley did work on the designs for the User Interface of the Android app including the initial designs and the initial way the user would use the App in the Sequence Diagram.
During Integration and Testing Week Ashley ended up mainly focussing on the User Interface design for the Android App, as he generally has a good eye for what looks good. This involved things like working with the UI tool in Android Studio as well as directly editing the XML when he needed to. It also involved a reasonable amount of editing images that Charlie had taken previously for use as the backgrounds for the App. He also did work with the timestamps in each waypoint and was generally considered the go-to guy whenever the XML was involved.
Ashley's quality of work was generally good, however at times it required quite a lot of effort to get work out of him in the first place.
WRITE APPROVAL LINE HERE


Kenny Packer - Android Developer
Kenny was assigned to be part of the Android Development team. Throughout the project Kenny spent most of his time working on developing the Android app as well as writing the initial versions of some of the documentation and making the changes as recommended by the customer.
Due to timetabling commitments it has meant that he has had to miss some of the meetings planned with short notice, but he is always happy to meet after the meeting to discuss what needs doing. During Integration and Testing Week Kenny showed up every day and continued to work on the App with the rest of the group, he also took the lead in testing the app after each new feature was marked as complete, often flagging up major bugs which needed fixing. Kenny also headed up making the more detailed visual design decisions for the app, e.g. designing the apps logo.
Throughout the project Kenny would always be up for taking on any task set and was not afraid to ask for help when he needed it. He often seemed to feel more comfortable working in tandem with someone else on a task rather than working completely on his own. He also was often used as a method of coordinating with Kieran when he was not available by other means or in meetings.
The quality of Kenny's work stayed consistent all the way through the project, always completing documentation as needed which generally only needed minor spelling and grammar checking. Although Kenny did not contribute a significant amount of code, the code he did produce was of high quality.
Pretty much true, no issues with this evaluation - Kenny


Kieran Palmer - Web Developer
Kieran's role in the project was set out as a Web Developer, who's role was mainly to support and contribute to the web front-end side of the project. He also took charge of making the initial changes to documents once they were returned after the first submission.
Throughout the project Kieran has missed a reasonably significant amount of group meetings, both official timetabled meetings and individual group meetings. Kieran also missed a few days of Integration and Testing Week and on the days he did attend, was often late.
In the first part of the project Kieran mainly focussed on documentation of the web side, producing parts of the document like the web side Sequence Diagram.
During Integration and Testing Week Kieran's main focus for the project was on improving the UI for the web design.
At the start of the project it seemed that despite his initial enthusiasm, the progress made by Stephen without any consultation with him, left Kieran without the opportunity to contribute at that stage of the project. Kieran's general attitude towards the project has been reasonably good whilst in meetings, however between meetings his contributions to the project seem to dwindle. Towards the end of the project Kieran's attitude seemed to improve, often asking what extra work he can do an what he could contribute to.
The quality of documentation produced was generally good with normally only minor corrections needed.
Kieran has struggled throughout the project on learning to use the Git version control, always needing supervision from other team members before committing any progress he makes.
I think with more managed time and meetings Kieran could be a much more valued member of the team.
I, Kieran, agree with what Daniel has written about my efforts in the group project. I acknowledge that my contributions were poor and I appreciate the help given to me by other members of the team.


Critical evaluation of the team and the project
-----------------------------------------------

1. How did the team perform as a whole, and how could that have been improved?
As a whole, the team performed fantastically, which resulted with a finished product i think we're all extremely happy with. The contributions of some team members significantly outweighed the contribution of others however which led to a
2. How could the project have been improved?
3. What were the most important lessons learned about software projects and about working in teams?
