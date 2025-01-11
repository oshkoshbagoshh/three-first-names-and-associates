# TFN Style Guide 


## Typography

### Text
- **Font Suggestion:** Open Sans
- **Reason:** It's clean and highly readable, making it suitable for body text.

### Links
- **Font Suggestion:** Open Sans or Rubik
- **Reason:** Use the same font as your body text for consistency, but consider a bold or italic variant to distinguish links.

### Headings
- **Font Suggestion:** Rubik
- **Reason:** Its geometric style can make headings stand out, providing a clear hierarchy.

### Captions
- **Font Suggestion:** Open Sans
- **Reason:** A simple, readable font that complements body text well.

### Buttons
- **Font Suggestion:** Rubik
- **Reason:** Its bold and modern appearance can make buttons more noticeable and engaging.

### Additional Tips
- **Consistency:** Stick to one or two fonts to maintain a cohesive look.
- **Contrast:** Ensure there is enough contrast between headings and body text for clarity.
- **Readability:** Prioritize readability, especially for body text and small elements like captions.

Feel free to adjust based on your brand's identity and the overall design of your website!

## Text Colors

When choosing colors for text, backgrounds, links, captions, buttons, and headings, it's important to ensure good contrast and readability. Here are some suggestions based on your color palette:

1. **Text**: 
   - Smoky Black (#100B00) on a light background for excellent readability.

2. **Background**: 
   - White or a very light shade for general content areas.

3. **Links**: 
   - Indigo (#440381) for a clear distinction from regular text.

4. **Captions**: 
   - Blue Violet (#8338EC) for a softer, yet readable option.

5. **Buttons**: 
   - Sapphire (#0056BF) with white text for strong visibility.

6. **Headings**: 
   - Indigo (#440381) or Smoky Black (#100B00) for strong emphasis.

Ensure that all combinations meet accessibility standards for contrast, especially for users with visual impairments.

```


## style.css (with everything )

```css

/* Typography Styles */
body {
    font-family: 'Open Sans', sans-serif;
    color: #100B00; /* Smoky Black for text */
    background-color: #FFFFFF; /* Light background */
}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Rubik', sans-serif;
    color: #440381; /* Indigo for headings */
    margin: 0 0 15px;
}

a {
    font-family: 'Open Sans', sans-serif;
    color: #440381; /* Indigo for links */
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.caption {
    font-family: 'Open Sans', sans-serif;
    color: #8338EC; /* Blue Violet for captions */
    font-size: 0.9em;
}

.button {
    font-family: 'Rubik', sans-serif;
    background-color: #0056BF; /* Sapphire for buttons */
    color: #FFFFFF; /* White text */
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    display: inline-block;
}

.button:hover {
    background-color: #00449E; /* Slightly darker Sapphire on hover */
}

/* Additional Styling */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

p {
    line-height: 1.6;
    margin: 0 0 15px;
}


```



```css
/* TFN Branding Stylesheet */

/* Color Palette */
:root {
  --indigo: #440381;
  --blue-violet: #8338EC;
  --electric-blue: #51E5FF;
  --sapphire: #0056BF;
  --smoky-black: #100B00;
}

/* Typography */
@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@700&family=Open+Sans:wght@400;700&display=swap');

body {
  font-family: 'Open Sans', sans-serif;
  color: var(--smoky-black);
  line-height: 1.6;
}

h1, h2, h3, h4, h5, h6 {
  font-family: 'Rubik', sans-serif;
  font-weight: 700;
}

/* Logo */
.logo {
  font-family: 'Rubik', sans-serif;
  font-weight: 700;
  text-transform: uppercase;
}

/* Example usage of colors */
.primary-bg {
  background-color: var(--indigo);
  color: white;
}

.secondary-bg {
  background-color: var(--blue-violet);
  color: white;
}

.accent {
  color: var(--electric-blue);
}

.cta {
  background-color: var(--sapphire);
  color: white;
}

/* Add more specific styles as needed */
```
