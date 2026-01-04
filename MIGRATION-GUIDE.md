# Content Migration Guide for Wrentham Band

This guide helps you transfer content from the old Wrentham Band website to WonderCMS.

## Quick Start Checklist

- [ ] Install WonderCMS
- [ ] Copy wrentham-theme folder to themes directory
- [ ] Activate the Wrentham Band theme
- [ ] Change default password and login URL
- [ ] Create pages (see below)
- [ ] Add sidebar content
- [ ] Add footer info content
- [ ] Upload images
- [ ] Test on mobile devices

## Creating Pages

### 1. Home Page (edit the default "Home" page)

**Content:**
```
## Latest News

Please check the [engagements list](/engagements) for the band's upcoming events.

## Welcome to Wrentham Band

*Insert welcome text here*

### The Wrentham Band c. 1925-26

![Wrentham Band 1925-26](benacre-park-1925.jpg)
*The Wrentham Band c. 1925-26 - and still smiling!!!*
```

### 2. About the Band

**Menu name:** About the Band
**URL slug:** about-the-band

**Sample content:**
```
## About Wrentham Band

Wrentham Band has been serving the community since 1919, making us one of the 
longest-established brass bands in East Anglia.

### Our History

*Insert band history here*

### What We Do

We perform at various community events, competitions, and concerts throughout 
the year. Our repertoire includes traditional brass band music, contemporary 
arrangements, and popular favorites.

### Rehearsals

We rehearse every Monday at 7:30 PM at Wrentham Village Hall, NR34 7HJ.
```

### 3. Engagements

**Menu name:** Engagements
**URL slug:** engagements

**Sample content:**
```
## Upcoming Engagements

### 2026 Season

*List upcoming events here with dates and locations*

### How to Book the Band

For booking enquiries, please contact us at 
[bookings@wrenthamband.org](mailto:bookings@wrenthamband.org)

## Past Performances

*Add highlights from recent events*
```

### 4. Band Members

**Menu name:** Band Members
**URL slug:** band-members

**Sample content:**
```
## Our Musical Director

*Insert MD information here*

## Current Members

*List band members by section*

### Cornets
- [List members]

### Horns
- [List members]

*Continue for all sections...*
```

### 5. Photo Gallery

**Menu name:** Photo Gallery
**URL slug:** photo-gallery

**Sample content:**
```
## Photo Gallery

### Recent Performances 2025

![Description](photo1.jpg)
![Description](photo2.jpg)

### Historical Photos

![Wrentham Band 1925](historical-photo.jpg)

*Add more photos as needed*
```

### 6. Contact Us

**Menu name:** Contact Us
**URL slug:** contact-us

**Sample content:**
```
## Contact Wrentham Band

### General Enquiries
Email: [info@wrenthamband.org](mailto:info@wrenthamband.org)

### Bookings
Email: [bookings@wrenthamband.org](mailto:bookings@wrenthamband.org)

### Find Us

We rehearse at:
**Wrentham Village Hall**
Wrentham
Suffolk
NR34 7HJ

### Rehearsal Times
Monday evenings, 7:30 PM - 9:30 PM

### Social Media
Follow us on [Facebook](https://www.facebook.com/groups/500818359956436/)
```

### 7. Support Us

**Menu name:** Support Us
**URL slug:** support-us

**Sample content:**
```
## Support Wrentham Band

### Shop Online with Easyfundraising

Please support us when you shop online by signing up to easyfundraising. 
It costs you nothing extra!

[Sign up to support Wrentham Band](http://www.easyfundraising.org.uk/causes/wrenthamband)

### How It Works

Every time you shop online via easyfundraising, retailers make a donation 
to the band at no cost to you.

### Make a Direct Donation

If you'd like to make a direct donation to support the band:

[Make a Donation](https://www.easyfundraising.org.uk/causes/wrenthamband/donate/)

Making a donation through easyfundraising is quick, simple and 100% secure. 
Unlike other sites, they don't take a commission on donations.

### Why We Need Your Support

*Explain how donations help - instruments, music, venue hire, etc.*
```

## Setting Up the Sidebar

Log in to WonderCMS and create a **static block** called "sidebar":

1. Log in to admin
2. On any page, you'll see editable areas
3. Look for the sidebar area (or Settings → Blocks)
4. Add this content:

```html
<h4>Bookings and Membership Enquiries</h4>
<p><a href="mailto:bookings@wrenthamband.org"><strong>bookings@wrenthamband.org</strong></a></p>

<h4>Please Support Us</h4>
<p>Support us when you shop online by signing up to easyfundraising:</p>
<p><a href="http://www.easyfundraising.org.uk/causes/wrenthamband" target="_blank">
<img src="easyfundraising-banner.png" alt="Easyfundraising" style="max-width: 100%;"></a></p>

<p>Please also consider making a direct donation to the band. Making a donation 
through easyfundraising is quick, simple and 100% secure.</p>

<p><a href="https://www.easyfundraising.org.uk/causes/wrenthamband/donate/" target="_blank">
<img src="easyfundraising-donate-button.png" alt="Donate" style="max-width: 100%;"></a></p>

<p><a href="https://www.easyfundraising.org.uk/blog/how-does-easyfundraising-work-a-guide-for-shoppers/">
More information on Easyfundraising</a></p>

<h4>Sites of Interest</h4>
<p><a href="http://www.4barsrest.com/default.asp" target="_blank">4barsrest</a></p>
<p><a href="http://www.bandsman.co.uk/home.htm" target="_blank">The Brass Band Portal</a></p>

<h4>Current Player Vacancies</h4>
<p>Players of all abilities welcome. We look forward to seeing you at rehearsals - 
Monday's at 7:30pm, <a href="http://www.wrentham.org.uk/page18a.html">Wrentham Village Hall</a>, 
Wrentham, NR34 7HJ</p>

<h4>Media and Selected Clips</h4>
<p><img src="wrentham-live-cd-cover.jpg" alt="Wrentham Band Live CD" style="max-width: 100%;"></p>
<p>Our most recent CD "Wrentham Band Live" at Framlingham is now available.</p>
<p><a href="media/susato-dances.mp3" target="_blank">Listen to a sample track</a></p>
```

## Setting Up Footer Info

Create a **static block** called "footer-info":

```html
<h3>Wrentham Band - Serving the Community Since 1919</h3>
<p>We are always looking for new players and supporters. Whether you play a brass 
instrument or would like to support us through easyfundraising, we'd love to hear from you.</p>
<p><a href="/contact-us">Contact us</a> | <a href="/support-us">Support us</a></p>
```

## Image Migration Tips

1. **Gather all images** from the old site
2. **Optimize images** before uploading:
   - Resize large images (max width 1200px for full-width images)
   - Save at appropriate quality (JPEG: 80-85%)
   - Use descriptive filenames
3. **Upload via WonderCMS**:
   - Log in
   - Edit a page
   - Click image icon in editor
   - Upload images
4. **Add alt text** for accessibility

## SEO Considerations

For each page, set:
- **Title**: Descriptive, unique title
- **Description**: 150-160 character summary
- **Keywords**: Relevant brass band keywords

Example for Home page:
- Title: Wrentham Band | Brass Band in Suffolk Since 1919
- Description: Wrentham Band is a traditional brass band based in Suffolk, performing at events and competitions throughout East Anglia since 1919.
- Keywords: wrentham band, brass band, suffolk, east anglia, community band

## After Migration

1. **Test all links** - ensure they work
2. **Check mobile display** - test on phone/tablet
3. **Review all images** - check they display correctly
4. **Proofread content** - fix any formatting issues
5. **Set up redirects** - if keeping old domain
6. **Update Google** - submit new sitemap
7. **Social media** - update links to new site

## Tips for Success

- **Work in stages** - migrate one page at a time
- **Preview before saving** - check formatting
- **Keep backups** - save content externally too
- **Use the WYSIWYG editor** - but switch to HTML when needed for complex formatting
- **Test regularly** - check site on different devices

## Need Help?

- WonderCMS documentation: https://www.wondercms.com/docs
- WonderCMS community: https://www.wondercms.com/community
- Bootstrap 3 documentation: https://getbootstrap.com/docs/3.3/
