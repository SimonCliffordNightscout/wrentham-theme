# Wrentham Band WonderCMS Theme

A clean, modern theme for WonderCMS inspired by the traditional Wrentham Band website, featuring the band's distinctive green and red colors.

## Features

- **Responsive design** - Works on all devices
- **Traditional brass band aesthetic** - Green and red color scheme
- **Two-column layout** - Main content area with sidebar
- **Clean typography** - Easy to read on all screens
- **Bootstrap 3** - Reliable, well-tested framework
- **Accessible** - Semantic HTML structure

## Installation

1. Copy the `wrentham-theme` folder to your WonderCMS `themes` directory
2. Log into your WonderCMS admin panel
3. Go to Settings → General
4. Select "wrentham-band" from the theme dropdown
5. Save changes

## Theme Structure

```
wrentham-theme/
├── theme.php              # Main template file
├── css/
│   └── style.css          # Theme styles
├── wcms-modules.json      # Theme metadata
└── README.md             # This file
```

## Editable Areas

The theme provides these editable areas:

### Main Content Area
- `<?= $Wcms->page('content') ?>` - Main page content (changes per page)

### Sidebar
- `<?= $Wcms->block('sidebar') ?>` - Right sidebar content (static across all pages)

### Footer Info Section
- `<?= $Wcms->block('footer-info') ?>` - Red footer section above main footer (static)

## Customization Tips

### Colors

The theme uses these main colors:
- **Primary Green**: `#006633` (headers, navigation hover)
- **Dark Green**: `#004d26` (gradients)
- **Primary Red**: `#8B0000` (footer info section, sidebar accents)
- **Dark Red**: `#660000` (gradients)

To change colors, edit `css/style.css`:

```css
/* Find and replace these color codes */
#006633  /* Primary green */
#8B0000  /* Primary red */
```

### Navigation

The navigation automatically pulls from your WonderCMS menu. To edit:
1. Log in to admin panel
2. Go to Settings → Menu
3. Add/edit/reorder menu items

### Logo/Favicon

To add your band logo or favicon:
1. Upload `favicon.ico` to the theme folder
2. Or replace the favicon reference in `theme.php`:
```php
<link rel="icon" href="<?= $Wcms->asset('your-favicon.ico') ?>" type="image/x-icon">
```

## Content Migration from Old Site

### Recommended WonderCMS Pages

Create these pages to match the old Wrentham Band structure:

1. **Home** (default page)
   - Latest news
   - Recent photos
   - Welcome message

2. **About the Band**
   - Band history
   - Achievements
   - Current objectives

3. **Band Members**
   - Current membership
   - Musical director info
   - Player profiles

4. **Engagements**
   - Upcoming events
   - Past performances
   - Booking information

5. **Photo Gallery**
   - Performance photos
   - Historical images
   - Event coverage

6. **Contact Us**
   - Contact form
   - Email addresses
   - Rehearsal location

7. **Support Us**
   - Easyfundraising info
   - Donation information
   - Sponsorship opportunities

### Sidebar Content Suggestions

Use the `sidebar` block for:
- Booking contact information
- Easyfundraising banner/button
- Player vacancies notice
- Rehearsal times and location
- Social media links (Facebook)
- Sites of interest links
- Latest CD information

### Footer Info Section

Use the `footer-info` block for:
- Additional support appeals
- Important notices
- Special announcements
- Event highlights

## Sample Content

### Sidebar Example

```html
<h4>Bookings and Membership Enquiries</h4>
<p><a href="mailto:bookings@wrenthamband.org"><strong>bookings@wrenthamband.org</strong></a></p>

<h4>Support Us</h4>
<p>Please support us when you shop online by signing up to easyfundraising.</p>
<p><a href="http://www.easyfundraising.org.uk/causes/wrenthamband" target="_blank">
<img src="easyfundbanner.png" alt="Easyfundraising" width="218" height="40"></a></p>

<h4>Current Player Vacancies</h4>
<p>Players of all abilities welcome. We rehearse Mondays at 7:30pm, 
<a href="http://www.wrentham.org.uk/page18a.html">Wrentham Village Hall</a>, 
Wrentham, NR34 7HJ</p>

<h4>Sites of Interest</h4>
<ul>
<li><a href="http://www.4barsrest.com/" target="_blank">4barsrest</a></li>
<li><a href="http://www.bandsman.co.uk/" target="_blank">The Brass Band Portal</a></li>
</ul>
```

### Footer Info Example

```html
<h3>Support Wrentham Band</h3>
<p>Making a donation through easyfundraising is quick, simple and 100% secure. 
Unlike other sites, they don't take a commission on donations.</p>
<p><a href="https://www.easyfundraising.org.uk/causes/wrenthamband/donate/" target="_blank">
Make a Donation</a></p>
```

## Technical Notes

- Requires WonderCMS 3.x or higher
- Uses Bootstrap 3.3.7 via CDN
- Uses jQuery 1.12.4 for Bootstrap functionality
- Mobile-first responsive design
- No JavaScript dependencies beyond Bootstrap

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- IE11+ (limited support)

## License

Free to use and modify for Wrentham Band purposes.

## Credits

Theme created for Wrentham Band's WonderCMS migration project.
Based on the original Wrentham Band website design (established 1919).
