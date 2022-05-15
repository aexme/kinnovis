
### Link:

[aws/api/filters/units](http://kinnovis-env.eba-jbn2d5zb.us-east-1.elasticbeanstalk.com/api/filters/units)



```javascript

{
    {
        "label": "units_search",
        "type": "text",
        "name": "id_name"
    },
    {
        "label": "units_location",
        "type": "multiselect",
        "name": "location",
        "values": ["Storeroom Innsbruck", "Storeroom Wien", "Storeroom Graz"]
    },
    {
        "label": "units_size",
        "type": "multiselect",
        "name": "size",
        "values": ["2m²", "5m²", "8m²", "10m²", "30m²", "160m²"]
    }, 
    {
        "label": "units_status",
        "type": "multiselect",
        "name": "status",
        "values": ["vacant", "maintenance", "blocked"]
    }
}
```

### Assumptions:

- translation happens on frontend, only label provided

- frontend knows language

- backend can search in multiple fields by special field name ie "id_name"


### Extensions:

- response can be extended to include enabled/disabled, dependency and mandatory parameters

- values may be better fetched via url as autocomplete, then "url" parameter would be needed or it can be generated from 
field name ie [fqdn]/filters/units/location
- adding an icon parameter and placeholder parameter 

