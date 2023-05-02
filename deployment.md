# Deployment Overview
The name of the Website is Baizonn Learning Center.
The website's objective is to help the learning center increase student enrollment. The website is designed to target high school students and their parents in Singapore.
WordPress was used to develop our website, and we will use some plugins to improve some of its features. In addition, our team will create the website together using collaboration tools like GitHub, Discord, Miro, Figam and Trello.

## Project Management
### Using applications:
1. [**Github**](https://github.com/Tianyi2/2023_SP51_CMS_GroupB)
2. [**Discord**](https://discord.gg/stXaHdK993)
3. [**Trello**](https://trello.com/invite/b/yb2bk5GC/ATTIea37c78a50d9dc8690e77df3b685c368A2789FF8/3402-ass2)
4. [**Figma**](https://www.figma.com/file/HstgJLk0fDn5zr4OqJ1Owg/Wireframing-in-Figma?node-id=0-1&t=40p1tslqPE3JTJZ9-0)
5. [**Miro**](https://miro.com/welcomeonboard/T3AxU2VZNHVOTTY0TkpCa3k3d1o5dU9pdGk2WkZ1N3VxZlhiSUFNdHB2aTdVZDYxWWo0UFE3MVM3RG5nWHlDcXwzNDU4NzY0NTE0MzYwOTk4OTMwfDI=?share_link_id=921783354141)

### Development Workflow

## Version Control

<p><b>GitHub:</b> We will update the project on Github after each modification, and manage files on Github.[1]</p>
<p><b>Trello:</b> We assign all tasks, record and iterate on Trello.[2]</p>
<p><b>Miro Board:</b> We assign all tasks, sketches and plans on Miro Board.[3]</p>

## Testing

<p><b>Browser Testing:</b> Despite device and browser fragmentation in general, websites need to be cross-browser compatible with a large number of devices. This means that website functionality must be tested on multiple device-browser-OS combinations.[4]</p>
<p><b>Responsive Design Testing:</b> Google's mobile-first indexing policy states that instead of looking at the desktop version of a site, it crawls and indexes the mobile version of the site. Essentially, search engines crawl and index pages based on how they appear on mobile devices, not desktops.[4]</p>
<p><b>Speed Testing:</b> It doesn't matter how great a website is in terms of content or graphics. According to Google's Maile Ohye, "2 seconds is an acceptable threshold for e-commerce sites. At Google, we aim for less than half a second."[4]</p>
<p><b>Broken Link Testing:</b> If the link exists on the site, it should work. Failure to do so can damage the credibility of the website and the brand behind it. Make sure all internal and external links work and direct users to the intended page. Continue to check your site for broken links intermittently, especially after adding new content.[4]</p>
<p><b>Readability Testing:</b> It makes no difference if the most professionally written and designed content on a website is unreadable. This test audits the content of a website to determine whether the content:[4]</p>

<ul>
<li>Perfect size for easy reading by visitors</li>
<li>Include bullet points, short paragraphs, and enough white space for visual appeal and easy navigation</li>
<li>Clean up spelling and grammar mistakes</li>
</ul>


## Automation

<p>Website automation is a way to automate common web actions-like filling out forms, clicking on buttons, downloading files-and hands them over to helpful software bots. While the internet makes doing business faster and easier in countless ways, these actions can be time consuming and prone to errors.[5]</p>

## Environment Overview:

### Infrastructure Architect (Deployment Workflow)
<a><img src="https://i.ibb.co/520xPRD/Development-Workflow.jpg" alt="Development-Workflow" border="0"></a>

<h3>Local Environment</h3>
<p><i><b>localhost E.g. WordPress</b></i></p>
<ul>
    <li>Analyze local error logs</li>
    <li>Troubleshooting WordPress Email Issues</li>
    <li>Check for broken links</li>
    <li>Main storage of WordPress main state</li>
    <li>Control access for permission of edit the backend storage</li>
    <li>Implement and store the php</li>
    <li>Store the main data that have huge size</li>
</ul>

<h3>Hosted Environment</h3>

<p><i><b>AWS</b></i></p>
<p>Amazon S3[6]</p>
<ul>
    <li>The full name is Amazon Easy Storage Service.</li>
    <li>It is a network online storage service provided by Amazon using its Amazon Web Services system.</li>
    <li>Via web service interfaces including REST, SOAP and BitTorrent.</li>
</ul>

<p>Amazon EC2[7]</p>
<ul>
    <li>The full name is Amazon Elastic Compute Cloud.</li>
    <li>It is a Web service provided by Amazon. It is a system that allows users to rent cloud computers to run the required applications.</li>
    <li>EC2 allows users to flexibly run their own Amazon machine image files by providing web services.</li>
</ul>

<p><i><b>X10</b></i></p>
<p>Pros[8]</p>
<ul>
    <li>99.9% uptime SLA</li>
    <li>SSD storage</li>
    <li>Free domain and SSL certificate with long-term contracts</li>
    <li>Free hosting service</li>
</ul>

<p>Cons[8]</p>
<ul>
    <li>Unresponsive customer support</li>
    <li>No ability to cancel your contract</li>
</ul>

## Reference

<ul>
<li><a href="https://github.com/Tianyi2/2023_SP51_CMS_GroupB">1. Visit Our Github</a></li>
<li><a href="https://trello.com/invite/b/yb2bk5GC/ATTIea37c78a50d9dc8690e77df3b685c368A2789FF8/3402-ass2">2. Visit Our Trello</a></li>
<li><a href="https://miro.com/welcomeonboard/T3AxU2VZNHVOTTY0TkpCa3k3d1o5dU9pdGk2WkZ1N3VxZlhiSUFNdHB2aTdVZDYxWWo0UFE3MVM3RG5nWHlDcXwzNDU4NzY0NTE0MzYwOTk4OTMwfDI=?share_link_id=199624583707">3. Visit Our Miro Board</a></li>
<li><a href="https://www.browserstack.com/guide/testing-checklist-for-website-launch">4. 5 Tests You Must Run Before Launching A Website</a></li>
<li><a href="https://www.fortra.com/product-lines/automate/use/web-browser-automation">5. Website Automation</a></li>
<li><a href="https://zh.wikipedia.org/zh-cn/Amazon_S3">6. Amazon S3</a></li>
<li><a href="https://zh.wikipedia.org/zh-cn/Amazon_EC2">7. Amazon EC2</a></li>
<li><a href="https://www.websiteplanet.com/web-hosting/x10hosting/">8. X10Hosting Review 2023 - Is It Worth It?</a></li>
</ul>
