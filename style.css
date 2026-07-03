/*
Theme Name: Evoke by Ayush
Theme URI: https://ayushacharya5.com.np
Author: Ayush Acharya
Author URI: https://ayushacharya5.com.np
Description: Evoke by Ayush is a clean, modern, and professional WordPress blog theme built for writers, journalists, and content creators. Featuring elegant typography, a card-based post layout, full widget support, and a fully responsive design, Evoke helps your words take center stage. For support, contact contact@ayushacharya5.com.np or visit ayushacharya5.com.np.
Version: 1.0.0
Requires at least: 5.9
Tested up to: 6.6
Requires PHP: 7.4
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: evoke-by-ayush
Tags: blog, one-column, two-columns, right-sidebar, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready, theme-options

Evoke by Ayush WordPress Theme
Copyright (c) 2026 Ayush Acharya
Support: contact@ayushacharya5.com.np
Website: https://ayushacharya5.com.np

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've
learned with others.
*/

/* =========================================================
   TABLE OF CONTENTS
   1.0  CSS Variables / Root
   2.0  Reset & Base
   3.0  Typography
   4.0  Layout / Containers
   5.0  Header
   6.0  Navigation
   7.0  Hero / Banner
   8.0  Posts & Cards
   9.0  Single Post
   10.0 Sidebar & Widgets
   11.0 Comments
   12.0 Forms & Buttons
   13.0 Footer
   14.0 Utilities
   15.0 Responsive
========================================================= */

/* 1.0 CSS Variables */
:root{
  --evk-primary:#2b3a67;
  --evk-accent:#ff6b4a;
  --evk-accent-dark:#e2552e;
  --evk-dark:#161821;
  --evk-text:#2c2e35;
  --evk-muted:#6b7280;
  --evk-border:#e7e7ee;
  --evk-bg:#ffffff;
  --evk-bg-alt:#f7f7fb;
  --evk-white:#ffffff;
  --evk-radius:10px;
  --evk-shadow:0 2px 10px rgba(22,24,33,0.06);
  --evk-shadow-hover:0 10px 30px rgba(22,24,33,0.12);
  --evk-font-heading:'Poppins', 'Segoe UI', sans-serif;
  --evk-font-body:'Inter', 'Segoe UI', sans-serif;
  --evk-transition: all .25s ease;
}

/* 2.0 Reset & Base */
*, *::before, *::after{ box-sizing:border-box; }
html{ scroll-behavior:smooth; }
body{
  margin:0;
  background:var(--evk-bg);
  color:var(--evk-text);
  font-family:var(--evk-font-body);
  font-size:16px;
  line-height:1.7;
  -webkit-font-smoothing:antialiased;
}
img{ max-width:100%; height:auto; display:block; }
a{ color:var(--evk-primary); text-decoration:none; transition:var(--evk-transition); }
a:hover{ color:var(--evk-accent); }
ul, ol{ padding-left:1.2em; }
figure{ margin:0; }
hr{ border:0; border-top:1px solid var(--evk-border); margin:2em 0; }

/* 3.0 Typography */
h1,h2,h3,h4,h5,h6{
  font-family:var(--evk-font-heading);
  color:var(--evk-dark);
  font-weight:600;
  line-height:1.25;
  margin:0 0 .6em;
}
h1{ font-size:2.4rem; }
h2{ font-size:1.9rem; }
h3{ font-size:1.5rem; }
h4{ font-size:1.2rem; }
p{ margin:0 0 1.2em; }
blockquote{
  margin:1.5em 0;
  padding:1em 1.5em;
  border-left:4px solid var(--evk-accent);
  background:var(--evk-bg-alt);
  font-style:italic;
  color:var(--evk-muted);
  border-radius:0 var(--evk-radius) var(--evk-radius) 0;
}
code, pre{
  font-family:'Consolas', monospace;
  background:var(--evk-bg-alt);
  border-radius:6px;
}
pre{ padding:1em; overflow-x:auto; }
code{ padding:.15em .4em; }

/* 4.0 Layout */
.evk-container{
  width:100%;
  max-width:1180px;
  margin:0 auto;
  padding:0 24px;
}
.evk-content-wrap{
  display:grid;
  grid-template-columns:1fr;
  gap:48px;
  padding:56px 0;
}
.evk-has-sidebar .evk-content-wrap{
  grid-template-columns:2.4fr 1fr;
}
.screen-reader-text{
  position:absolute !important;
  clip:rect(1px,1px,1px,1px);
  overflow:hidden;
  height:1px;width:1px;
  word-wrap:normal !important;
}
.skip-link{
  position:absolute; left:-9999px; top:0;
  background:var(--evk-primary); color:#fff;
  padding:12px 20px; z-index:9999; border-radius:0 0 8px 0;
}
.skip-link:focus{ left:0; }

/* 5.0 Header */
.evk-site-header{
  position:sticky; top:0; z-index:500;
  background:rgba(255,255,255,0.95);
  backdrop-filter:blur(8px);
  border-bottom:1px solid var(--evk-border);
}
.evk-header-inner{
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:18px 24px;
  max-width:1180px;
  margin:0 auto;
  gap:24px;
}
.evk-site-branding{ display:flex; align-items:center; gap:12px; }
.evk-site-branding img{ max-height:44px; width:auto; }
.evk-site-title{
  font-family:var(--evk-font-heading);
  font-size:1.5rem;
  font-weight:700;
  color:var(--evk-dark);
  margin:0;
  letter-spacing:-.5px;
}
.evk-site-title a{ color:var(--evk-dark); }
.evk-site-title a:hover{ color:var(--evk-accent); }
.evk-site-description{
  font-size:.8rem; color:var(--evk-muted); margin:0;
}

/* 6.0 Navigation */
.evk-main-nav ul{
  list-style:none; margin:0; padding:0;
  display:flex; gap:6px; align-items:center;
}
.evk-main-nav a{
  display:inline-block;
  padding:10px 16px;
  font-weight:500;
  color:var(--evk-text);
  border-radius:999px;
  font-size:.95rem;
}
.evk-main-nav a:hover, .evk-main-nav .current-menu-item > a{
  background:var(--evk-bg-alt);
  color:var(--evk-accent);
}
.evk-main-nav ul ul{
  position:absolute; background:#fff; flex-direction:column;
  box-shadow:var(--evk-shadow-hover); border-radius:var(--evk-radius);
  padding:8px; min-width:200px; opacity:0; visibility:hidden;
  transform:translateY(8px); transition:var(--evk-transition);
}
.evk-main-nav li{ position:relative; }
.evk-main-nav li:hover > ul{ opacity:1; visibility:visible; transform:translateY(0); }
.evk-menu-toggle{
  display:none; background:none; border:none; cursor:pointer;
  padding:8px; flex-direction:column; gap:5px;
}
.evk-menu-toggle span{ width:26px; height:2px; background:var(--evk-dark); display:block; }

/* 7.0 Hero */
.evk-hero{
  background:linear-gradient(135deg, var(--evk-primary), #1c274a);
  color:#fff; padding:80px 24px; text-align:center;
}
.evk-hero h1{ color:#fff; font-size:2.6rem; margin-bottom:.4em; }
.evk-hero p{ color:rgba(255,255,255,0.85); max-width:600px; margin:0 auto; }

/* 8.0 Posts & Cards */
.evk-post-grid{
  display:grid;
  grid-template-columns:repeat(auto-fill, minmax(300px, 1fr));
  gap:32px;
}
.evk-card{
  background:var(--evk-white);
  border:1px solid var(--evk-border);
  border-radius:var(--evk-radius);
  overflow:hidden;
  transition:var(--evk-transition);
  display:flex; flex-direction:column;
}
.evk-card:hover{
  transform:translateY(-4px);
  box-shadow:var(--evk-shadow-hover);
  border-color:transparent;
}
.evk-card-thumb{ overflow:hidden; aspect-ratio:16/10; background:var(--evk-bg-alt); }
.evk-card-thumb img{ width:100%; height:100%; object-fit:cover; transition:var(--evk-transition); }
.evk-card:hover .evk-card-thumb img{ transform:scale(1.06); }
.evk-card-body{ padding:22px; display:flex; flex-direction:column; flex:1; }
.evk-card-cat{
  display:inline-block; font-size:.72rem; font-weight:700;
  text-transform:uppercase; letter-spacing:.06em;
  color:var(--evk-accent); margin-bottom:10px;
}
.evk-card-title{ font-size:1.2rem; margin-bottom:.4em; }
.evk-card-title a{ color:var(--evk-dark); }
.evk-card-title a:hover{ color:var(--evk-accent); }
.evk-card-excerpt{ color:var(--evk-muted); font-size:.94rem; flex:1; }
.evk-meta{
  display:flex; align-items:center; gap:14px; flex-wrap:wrap;
  font-size:.82rem; color:var(--evk-muted); margin-top:14px;
}
.evk-meta img.avatar{ border-radius:50%; width:26px; height:26px; }
.evk-read-more{
  display:inline-flex; align-items:center; gap:6px;
  font-weight:600; color:var(--evk-accent); margin-top:14px; font-size:.9rem;
}
.evk-read-more:hover{ gap:10px; }

/* 9.0 Single Post */
.evk-single-header{ margin-bottom:2em; }
.evk-single-header .evk-card-cat{ font-size:.8rem; }
.evk-single-header h1{ font-size:2.3rem; margin:.3em 0; }
.evk-featured-image{ margin:1.5em 0; border-radius:var(--evk-radius); overflow:hidden; }
.evk-entry-content{ font-size:1.05rem; }
.evk-entry-content h2{ margin-top:1.6em; }
.evk-entry-content h3{ margin-top:1.4em; }
.evk-entry-content img{ border-radius:var(--evk-radius); margin:1.2em 0; }
.evk-tags{ margin:2em 0; display:flex; gap:8px; flex-wrap:wrap; }
.evk-tags a{
  background:var(--evk-bg-alt); padding:6px 14px; border-radius:999px; font-size:.82rem;
}
.evk-author-box{
  display:flex; gap:18px; background:var(--evk-bg-alt);
  padding:24px; border-radius:var(--evk-radius); margin:2.5em 0;
}
.evk-author-box img{ border-radius:50%; width:64px; height:64px; }
.evk-post-nav{
  display:flex; justify-content:space-between; gap:20px;
  margin:2.5em 0; padding-top:1.5em; border-top:1px solid var(--evk-border);
}
.evk-post-nav a{ font-weight:600; max-width:45%; }
.evk-post-nav span{ display:block; font-size:.78rem; color:var(--evk-muted); font-weight:400; }

/* 10.0 Sidebar & Widgets */
.evk-sidebar .widget{
  background:var(--evk-bg-alt);
  border-radius:var(--evk-radius);
  padding:24px; margin-bottom:28px;
}
.evk-sidebar .widget-title{
  font-size:1.05rem; margin-bottom:16px; padding-bottom:10px;
  border-bottom:2px solid var(--evk-accent); display:inline-block;
}
.evk-sidebar ul{ list-style:none; margin:0; padding:0; }
.evk-sidebar li{ padding:8px 0; border-bottom:1px solid var(--evk-border); }
.evk-sidebar li:last-child{ border-bottom:none; }
.evk-sidebar a{ color:var(--evk-text); }
.evk-sidebar a:hover{ color:var(--evk-accent); }

/* 11.0 Comments */
.evk-comments{ margin-top:3em; }
.comment-list{ list-style:none; margin:0; padding:0; }
.comment-list .children{ list-style:none; margin-left:40px; padding:0; }
.comment-body{
  background:var(--evk-bg-alt); padding:20px; border-radius:var(--evk-radius); margin-bottom:16px;
}
.comment-author .fn{ font-weight:600; color:var(--evk-dark); }
.comment-metadata{ font-size:.8rem; color:var(--evk-muted); margin-bottom:8px; }
.comment-reply-link{ font-size:.82rem; font-weight:600; }

/* 12.0 Forms & Buttons */
.evk-btn, button, input[type=submit]{
  display:inline-block; background:var(--evk-accent); color:#fff !important;
  border:none; padding:12px 26px; border-radius:999px; font-weight:600;
  cursor:pointer; font-size:.95rem; transition:var(--evk-transition);
}
.evk-btn:hover, button:hover, input[type=submit]:hover{
  background:var(--evk-accent-dark); transform:translateY(-2px);
}
input[type=text], input[type=email], input[type=url], input[type=search],
input[type=password], textarea, select{
  width:100%; padding:12px 16px; border:1px solid var(--evk-border);
  border-radius:8px; font-family:inherit; font-size:.95rem; margin-bottom:14px;
  background:#fff; color:var(--evk-text);
}
input:focus, textarea:focus{ outline:2px solid var(--evk-accent); outline-offset:1px; }
.evk-search-form{ display:flex; gap:8px; }
.evk-search-form input[type=search]{ margin-bottom:0; }

/* Pagination */
.evk-pagination{ display:flex; justify-content:center; gap:8px; margin-top:3em; }
.evk-pagination a, .evk-pagination span{
  padding:10px 16px; border-radius:8px; border:1px solid var(--evk-border);
  color:var(--evk-text); font-weight:600; font-size:.9rem;
}
.evk-pagination .current{ background:var(--evk-accent); color:#fff; border-color:var(--evk-accent); }
.evk-pagination a:hover{ border-color:var(--evk-accent); color:var(--evk-accent); }

/* 13.0 Footer */
.evk-site-footer{
  background:var(--evk-dark); color:#c9cad1; padding:64px 0 0; margin-top:60px;
}
.evk-footer-grid{
  display:grid; grid-template-columns:1.4fr 1fr 1fr; gap:40px;
  padding-bottom:40px; border-bottom:1px solid rgba(255,255,255,0.1);
}
.evk-footer-col h4{ color:#fff; font-size:1rem; margin-bottom:1em; }
.evk-footer-col p, .evk-footer-col a{ color:#a9aab3; font-size:.92rem; }
.evk-footer-col a:hover{ color:var(--evk-accent); }
.evk-footer-col ul{ list-style:none; padding:0; margin:0; }
.evk-footer-col li{ margin-bottom:10px; }
.evk-footer-bottom{
  display:flex; justify-content:space-between; align-items:center;
  flex-wrap:wrap; gap:12px; padding:24px 0; font-size:.85rem; color:#8b8c96;
}
.evk-footer-bottom a{ color:#c9cad1; }
.evk-social-links{ display:flex; gap:12px; }
.evk-social-links a{
  width:38px; height:38px; border-radius:50%; background:rgba(255,255,255,0.08);
  display:flex; align-items:center; justify-content:center; color:#fff;
}
.evk-social-links a:hover{ background:var(--evk-accent); }

/* 14.0 Utilities */
.evk-text-center{ text-align:center; }
.alignwide{ margin-left:calc(-1 * 8%); margin-right:calc(-1 * 8%); max-width:116%; }
.alignfull{ width:100vw; position:relative; left:50%; right:50%; margin-left:-50vw; margin-right:-50vw; }
.wp-caption-text, .gallery-caption{ font-size:.82rem; color:var(--evk-muted); text-align:center; margin-top:.5em; }

/* 15.0 Responsive */
@media (max-width:960px){
  .evk-has-sidebar .evk-content-wrap{ grid-template-columns:1fr; }
  .evk-footer-grid{ grid-template-columns:1fr 1fr; }
}
@media (max-width:782px){
  .evk-main-nav{
    position:fixed; top:78px; right:0; height:calc(100vh - 78px);
    width:280px; background:#fff; flex-direction:column;
    transform:translateX(100%); transition:var(--evk-transition);
    box-shadow:var(--evk-shadow-hover); padding:20px; overflow-y:auto;
  }
  .evk-main-nav.is-active{ transform:translateX(0); }
  .evk-main-nav ul{ flex-direction:column; align-items:stretch; }
  .evk-main-nav ul ul{ position:static; box-shadow:none; opacity:1; visibility:visible; transform:none; padding-left:12px; }
  .evk-menu-toggle{ display:flex; }
  .evk-footer-grid{ grid-template-columns:1fr; }
  h1{ font-size:1.9rem; }
  .evk-hero h1{ font-size:2rem; }
  .evk-hero{ padding:56px 20px; }
}
