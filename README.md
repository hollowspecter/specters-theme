# specters-theme
bludit theme for my homepage

## How to use
- the home page shows all posts with the tag "home" as well as a card-view list of all the posts with the tag "feature"

- categories can have different templates
    - "log": lists posts + date + description in a vertical list
    - "card": lists posts in a card view (see for example on projects)

### Mark context only as external links

- activate the custom fields
- add this into the custom fields

```json
{
    "isExternalLink": {
        "type": "bool",
        "label": "Is External Link",
        "tip": "Mark this page as an external link"
    },
    "externalLink": {
        "type": "string",
        "label": "External URL",
        "tip": "Write the external URL this page points to"
    }
}
```