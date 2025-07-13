# Repository Notes

This project now contains a WordPress theme located in `tango_kingdom_theme/`.
Static assets such as images and CSS remain under the root `assets/` directory.
The theme templates reference those assets using `get_template_directory_uri()`
with relative paths.

Theme structure:
- `front-page.php`
- `template-dog.php`
- `template-family.php`
- `header.php`, `footer.php`, `index.php`
- `functions.php`
- `style.css`

