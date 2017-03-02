# Personal-Webpage: Cory Cizauskas

A great deal has changed since I first began this project. To begin, the photo album I had planned to add as a background/feature is now its own separate page. The webpage has has basic responces to changes in window size, but these will need to be expanded upon later. I used the following bootstrap template as a starting point for this project:
"https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_webpage&stacked=h" 

I have several questions about how to proceed, and will pose them after each page description.

The home page now uses a full page image of Myrtle Bay as it's background. Below this, the footer contains a brief esoteric quote about the image. For this section, I may want to make the background/quote combination dynamic, changing with the seasons to show frost in winter and a savanah in the summer. I should be able to implement a jquery method to change the content of these elements to something else in the file tree.

The next three sections contain similar elements to the left and right of each page's main content. The left panel contains several links to my social media sites on platforms such as Facebook or LinkedIn. There is a bit too much whitespace below these links, so I'll need to think of more content for the site. To the right of the main panel is a screenshot image of New York Times headlines from March 1st. This acts as a placeholder for now, but I'd like to make this content dynamic, picking current articles links from the NYT site and displaying them within this panel. How might I be able to accomplish this?

For the main content of the blog, I've created a short title and summary for the content within. At this time I do not know how to build a makeshift blog. I may want to consider hosting my site on Wordpress to gain access to their blogging tools. Of course if there were a method to use these tools in my own domain, I would prefer it. At this time, the blog content contains a short introduction followed by a fake post about coffee. What 3rd party software might be best for setting up a blog in this section of my site?

The about me section will contain a short summary of my life, followed by a description of my expertise (whatever that may be in the future). For now, I've placed a quote from my LinkedIn page below the work experience page to imitate the content. At the bottom of this section, I've added a download link to a fake resume text document. My goal for this link is to provide an easy way for people to view my resume should I meet a potential employer and hand out a business card. However, I do not want this to be accessible by anyone. To protect my privacy, I've added a short javascript listener to prompt the viewer for a password. Unfortunatly, this javascript is visible to anyone viewing the site, meaning they would be able to find the password in the page source. I will need to get a backend process going to store passwords offline. According to one site, I can create a .htaccess file in my directory that will be inaccessible to the public. Is there a better way to implement a password system for this purpose?

And lastly, the Album page is turning out rather well. I found a w3schools template for storing photos in an aesthetic manner. At the moment, they adjust themselves on the page depending on the width of the window. But I've encountered two issues. One, if the window is reduced to half the size of the screen, the images disappear altogether and I don't know why? In addition to this, I'd like to create a button that allows me to upload photos from my phone/laptop to be stored in the album. But I don't know how to make this private. What software could I use to create an 'account' for adding content to the blog or album?

One last note for myself. Converting the main content on the last three pages into a frame would allow the user to scroll down and give me more room to add to it. I dislike how frames work in html though, and wonder if there's a better way to implement this.


------------------------------------------------------------------------------------------------------------------------------------
Old Webpage Proposal:

For this personal webpage, I'll be proposing two main content panels supported by several extra features accessible from all pages
but the main. When the site is first accessed, the home page will contain a photographic background of something to be determined
along with a quote centered on the page which will also be determined at a later time. The quote will be randomly selected from a
set each time the main page is accessed. Perhaps the background will use the Photo Album feature I wish to include by creating a
background from multiple photographs and updating them accordingly. The user will find a continue button below the quote that will
lead to the Blog section of my page.

The blog section of this site will continue to use the photograph background from the home page but with a grey tint. I have nothing
special planned for this blog section other than the ability to create posts from text and images. To the right of the blog, there
will a "Recent News" section which copies headlines and article links from The New York Times. Along the left side, I'd like to
include a small display of recent photos I added to the site, each expanding when clicked by the user. A menu bar will be at the top
to allow navigation back to the main page and to an "About Me" page.

The "About Me" page will be set up similarly to the blog page, including the Recent News and Album sections. It will use the center
space previously used by the blog to summarize my work history and skills. At the bottom of the page, there will be a Link saying
"Download Resume Here" which will prompt the user for a one-time-only password to be provided at my leisure. This is meant to protect
private information I only want potential employers/colleagues to see.

Extra Idea: I don't know if this would be possible, but perhaps a discus comment section could be created for each blog post?
The only drawback I see to this is that I would need to make a page for each blog post.
