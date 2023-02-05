<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Web Design</title>
    
</head>
<style>
     /* CSS for header */
     .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }

    .header .logo {
      font-size: 25px;
      /* font-family: 'Sriracha', cursive; */
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
    }
</style>
<body>
<header class="header">
    <a href="#" class="logo">CIT</a>
    <nav class="nav-items">
      <a href="home.php">Home</a>
      
    </nav>
</header>
    <h1><center>Web Design</center><h1>
        <hr>
        <br>
       
 <div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Intro</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Getting started</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Page Layout</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Static websites</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings1" role="tab" aria-controls="settings">Dynamic websites</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings2" role="tab" aria-controls="settings">Occupations</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings3" role="tab" aria-controls="settings">Ex.</a>
    </div>
  </div>
  <div class="col-6">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development.<hr>
      <iframe width="420" height="345" src="https://www.youtube.com/embed/F4fbwKV9dBU"> 
</iframe>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Website designers may consider it to be good practice to conform to standards. This is usually done via a description specifying what the element is doing. Failure to conform to standards may not make a website unusable or error-prone, but standards can relate to the correct layout of pages for readability as well as making sure coded elements are closed appropriately. This includes errors in code, a more organized layout for code, and making sure IDs and classes are identified properly. Poorly coded pages are sometimes colloquially called tag soup. Validating via W3C[9] can only be done when a correct DOCTYPE declaration is made, which is used to highlight errors in code. The system identifies the errors and areas that do not conform to web design standards. This information can then be corrected by the user.[19]</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Part of the user interface design is affected by the quality of the page layout. For example, a designer may consider whether the site's page layout should remain consistent on different pages when designing the layout. Page pixel width may also be considered vital for aligning objects in the layout design. The most popular fixed-width websites generally have the same set width to match the current most popular browser window, at the current most popular screen resolution, on the current most popular monitor size. Most pages are also center-aligned for concerns of aesthetics on larger screens.

Fluid layouts increased in popularity around 2000 to allow the browser to make user-specific layout adjustments to fluid layouts based on the details of the reader's screen (window size, font size relative to window, etc.). They grew as an alternative to HTML-table-based layouts and grid-based design in both page layout design principles and in coding technique but were very slow to be adopted.[note 1] This was due to considerations of screen reading devices and varying windows sizes which designers have no control over. Accordingly, a design may be broken down into units (sidebars, content blocks, embedded advertising areas, navigation areas) that are sent to the browser and which will be fitted into the display window by the browser, as best it can. Although such a display may often change the relative position of major content units, sidebars may be displaced below body text rather than to the side of it. This is a more flexible display than a hard-coded grid-based layout that doesn't fit the device window. In particular, the relative position of content blocks may change while leaving the content within the block unaffected. This also minimizes the user's need to horizontally scroll the page.</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">A static website stores a unique file for every page of a static website. Each time that page is requested, the same content is returned. This content is created once, during the design of the website. It is usually manually authored, although some sites use an automated creation process, similar to a dynamic website, whose results are stored long-term as completed pages. These automatically created static sites became more popular around 2015, with generators such as Jekyll and Adobe Muse.[20]

The benefits of a static website are that they were simpler to host, as their server only needed to serve static content, not execute server-side scripts. This required less server administration and had less chance of exposing security holes. They could also serve pages more quickly, on low-cost server hardware. This advantage became less important as cheap web hosting expanded to also offer dynamic features, and virtual servers offered high performance for short intervals at low cost.

Almost all websites have some static content, as supporting assets such as images and style sheets are usually static, even on a website with highly dynamic pages.</div>
      <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">Dynamic websites are generated on the fly and use server-side technology to generate web pages. They typically extract their content from one or more back-end databases: some are database queries across a relational database to query a catalog or to summarise numeric information, and others may use a document database such as MongoDB or NoSQL to store larger units of content, such as blog posts or wiki articles.

In the design process, dynamic pages are often mocked-up or wireframed using static pages. The skillset needed to develop dynamic web pages is much broader than for a static page, involving server-side and database coding as well as client-side interface design. Even medium-sized dynamic projects are thus almost always a team effort.

When dynamic web pages first developed, they were typically coded directly in languages such as Perl, PHP or ASP. Some of these, notably PHP and ASP, used a 'template' approach where a server-side page resembled the structure of the completed client-side page, and data was inserted into places defined by 'tags'. This was a quicker means of development than coding in a purely procedural coding language such as Perl.

Both of these approaches have now been supplanted for many websites by higher-level application-focused tools such as content management systems. These build on top of general-purpose coding platforms and assume that a website exists to offer content according to one of several well-recognised models, such as a time-sequenced blog, a thematic magazine or news site, a wiki, or a user forum. These tools make the implementation of such a site very easy, and a purely organizational and design-based task, without requiring any coding.

Editing the content itself (as well as the template page) can be done both by means of the site itself and with the use of third-party software. The ability to edit all pages is provided only to a specific category of users (for example, administrators, or registered users). In some cases, anonymous users are allowed to edit certain web content, which is less frequent (for example, on forums - adding messages). An example of a site with an anonymous change is Wikipedia.</div>
      <div class="tab-pane fade" id="list-settings2" role="tabpanel" aria-labelledby="list-settings2-list">There are two primary jobs involved in creating a website: the web designer and web developer, who often work closely together on a website.[34] The web designers are responsible for the visual aspect, which includes the layout, colouring, and typography of a web page. Web designers will also have a working knowledge of markup languages such as HTML and CSS, although the extent of their knowledge will differ from one web designer to another. Particularly in smaller organizations, one person will need the necessary skills for designing and programming the full web page, while larger organizations may have a web designer responsible for the visual aspect alone.

Further jobs which may become involved in the creation of a website include:

Graphic designers to create visuals for the site such as logos, layouts, and buttons
Internet marketing specialists to help maintain web presence through strategic solutions on targeting viewers to the site, by using marketing and promotional techniques on the internet
SEO writers to research and recommend the correct words to be incorporated into a particular website and make the website more accessible and found on numerous search engines
Internet copywriter to create the written content of the page to appeal to the targeted viewers of the site[1]
User experience (UX) designer incorporates aspects of user-focused design considerations which include information architecture, user-centred design, user testing, interaction design, and occasionally visual design.</div>
      <div class="tab-pane fade" id="list-settings3" role="tabpanel" aria-labelledby="list-settings3-list">Create a simple login form using html and css.(3pt)
      <textarea id="ex" name="ex" rows="3" cols="40"></textarea><br>
      <button class="btn btn-primary" id="btn-open">Submit</button>
      </div>
    </div>
  </div>
</div>


    
</body>
</html>