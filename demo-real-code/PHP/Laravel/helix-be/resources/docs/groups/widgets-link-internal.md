# Widgets Link Internal


## Display a listing of all widgets Link Internal .

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widget-link-internal" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-link-internal"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Link Internal.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'body'      => "Body"
    'link_type'      => "link_type"
    'link'      => "link"
    'cta'      => "cta"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_link_internal/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (204):

```json
<Empty response>
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widget-link-internal" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widget-link-internal"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widget-link-internal"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widget-link-internal" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widget-link-internal"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widget-link-internal" data-method="GET" data-path="api/cms/v1/widget-link-internal" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widget-link-internal', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widget-link-internal" onclick="tryItOut('GETapi-cms-v1-widget-link-internal');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widget-link-internal" onclick="cancelTryOut('GETapi-cms-v1-widget-link-internal');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widget-link-internal" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widget-link-internal</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widget-link-internal" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widget-link-internal" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="GETapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="GETapi-cms-v1-widget-link-internal" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="GETapi-cms-v1-widget-link-internal" data-component="body" ><code>true</code></label>
<label data-endpoint="GETapi-cms-v1-widget-link-internal" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="GETapi-cms-v1-widget-link-internal" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="GETapi-cms-v1-widget-link-internal" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="GETapi-cms-v1-widget-link-internal" data-component="body"  hidden>
<br>
</p>
</details>
</p>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="GETapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>headline</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="headline" data-endpoint="GETapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>link_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link_type" data-endpoint="GETapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>link</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link" data-endpoint="GETapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>cta</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cta" data-endpoint="GETapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>

</form>


## Display the specified widget Link Internal.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/cms/v1/widget-link-internal/similique?id=11" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-link-internal/similique"
);

let params = {
    "id": "11",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Link Internal.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'body'      => "Body"
    'link_type'      => "link_type"
    'link'      => "link"
    'cta'      => "cta"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_link_internal/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not Found",
    "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-cms-v1-widget-link-internal--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cms-v1-widget-link-internal--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cms-v1-widget-link-internal--id-"></code></pre>
</div>
<div id="execution-error-GETapi-cms-v1-widget-link-internal--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cms-v1-widget-link-internal--id-"></code></pre>
</div>
<form id="form-GETapi-cms-v1-widget-link-internal--id-" data-method="GET" data-path="api/cms/v1/widget-link-internal/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cms-v1-widget-link-internal--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cms-v1-widget-link-internal--id-" onclick="tryItOut('GETapi-cms-v1-widget-link-internal--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cms-v1-widget-link-internal--id-" onclick="cancelTryOut('GETapi-cms-v1-widget-link-internal--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cms-v1-widget-link-internal--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cms/v1/widget-link-internal/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-cms-v1-widget-link-internal--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="query"  hidden>
<br>
widgets Imag Answer ID</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="GETapi-cms-v1-widget-link-internal--id-" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="GETapi-cms-v1-widget-link-internal--id-" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="body"  hidden>
<br>
</p>
</details>
</p>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>headline</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="headline" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>link_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link_type" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>link</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>cta</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cta" data-endpoint="GETapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Store a newly created  widget Link Internal

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/cms/v1/widget-link-internal" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-link-internal"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Link Internal.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'body'      => "Body"
    'link_type'      => "link_type"
    'link'      => "link"
    'cta'      => "cta"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_link_internal/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "message": "The given data was invalid.",
        "errors": {
            "headline": [
                "The headline field is required."
            ],
            "body": [
                "The body field is required."
            ],
            "link_type": [
                "The link type field is required."
            ],
            "link": [
                "The link field is required."
            ],
            "cta": [
                "The cta field is required."
            ]
        }
    }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-POSTapi-cms-v1-widget-link-internal" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-cms-v1-widget-link-internal"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cms-v1-widget-link-internal"></code></pre>
</div>
<div id="execution-error-POSTapi-cms-v1-widget-link-internal" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cms-v1-widget-link-internal"></code></pre>
</div>
<form id="form-POSTapi-cms-v1-widget-link-internal" data-method="POST" data-path="api/cms/v1/widget-link-internal" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-cms-v1-widget-link-internal', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-cms-v1-widget-link-internal" onclick="tryItOut('POSTapi-cms-v1-widget-link-internal');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-cms-v1-widget-link-internal" onclick="cancelTryOut('POSTapi-cms-v1-widget-link-internal');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-cms-v1-widget-link-internal" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/cms/v1/widget-link-internal</code></b>
</p>
<p>
<label id="auth-POSTapi-cms-v1-widget-link-internal" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-cms-v1-widget-link-internal" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>headline</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="headline" data-endpoint="POSTapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="POSTapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>link_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link_type" data-endpoint="POSTapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>link</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link" data-endpoint="POSTapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>cta</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cta" data-endpoint="POSTapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="POSTapi-cms-v1-widget-link-internal" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="POSTapi-cms-v1-widget-link-internal" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="POSTapi-cms-v1-widget-link-internal" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-cms-v1-widget-link-internal" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="POSTapi-cms-v1-widget-link-internal" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-cms-v1-widget-link-internal" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="POSTapi-cms-v1-widget-link-internal" data-component="body" ><code>false</code></label>
<br>
</p>
</details>
</p>

</form>


## Update the specified widget Link Internal

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/cms/v1/widget-link-internal/sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-link-internal/sint"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = 

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Created new widget Link Internal.",
 "data": [
    "id": 1,
    "widget_type_id": 3,
    'body'      => "Body"
    'link_type'      => "link_type"
    'link'      => "link"
    'cta'      => "cta"
     "button_text": "button_text",
     "settings_id": "1",
     "created_at": "2021-03-09T17:54:59.000000Z",
     "updated_at": "2021-03-09T17:54:59.000000Z",
     "widget_settings": {
         "id": 1,
         "header_img": "widget_link_internal/3R3jkynhbduUZ1kvkxXqC4fjeniXcCChHoDj697G.jpg",
         "completion_time": 2,
         "reward_id": null,
         "created_at": "2021-03-09T17:54:59.000000Z",
         "updated_at": "2021-03-09T17:54:59.000000Z"
     },
 ]
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "message": "The given data was invalid.",
        "errors": {
            "headline": [
                "The headline field is required."
            ],
            "body": [
                "The body field is required."
            ],
            "link_type": [
                "The link type field is required."
            ],
            "link": [
                "The link field is required."
            ],
            "cta": [
                "The cta field is required."
            ]
        }
    }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-PUTapi-cms-v1-widget-link-internal--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-cms-v1-widget-link-internal--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cms-v1-widget-link-internal--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-cms-v1-widget-link-internal--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cms-v1-widget-link-internal--id-"></code></pre>
</div>
<form id="form-PUTapi-cms-v1-widget-link-internal--id-" data-method="PUT" data-path="api/cms/v1/widget-link-internal/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-cms-v1-widget-link-internal--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-cms-v1-widget-link-internal--id-" onclick="tryItOut('PUTapi-cms-v1-widget-link-internal--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-cms-v1-widget-link-internal--id-" onclick="cancelTryOut('PUTapi-cms-v1-widget-link-internal--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-cms-v1-widget-link-internal--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/cms/v1/widget-link-internal/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-cms-v1-widget-link-internal--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>headline</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="headline" data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>link_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link_type" data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>link</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="link" data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>cta</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cta" data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>button_text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="button_text" data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>settings</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The settings object</summary>
<br>
<p>
<b><code>settings.header_img</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="settings.header_img" data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.completion_time</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="settings.completion_time" data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>settings.require_header_image</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" hidden><input type="radio" name="settings.require_header_image" value="true" data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" hidden><input type="radio" name="settings.require_header_image" value="false" data-endpoint="PUTapi-cms-v1-widget-link-internal--id-" data-component="body" ><code>false</code></label>
<br>
</p>
</details>
</p>

</form>


## Remove the specified widget Link Internal.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/cms/v1/widget-link-internal/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/cms/v1/widget-link-internal/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Deleted The widget Link Internal.",
 "data": null
}

* @response   404 {
 "success": false,
 "code": 404,
 "message": "Not found",
 "data": null
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent.",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-DELETEapi-cms-v1-widget-link-internal--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-cms-v1-widget-link-internal--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cms-v1-widget-link-internal--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-cms-v1-widget-link-internal--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cms-v1-widget-link-internal--id-"></code></pre>
</div>
<form id="form-DELETEapi-cms-v1-widget-link-internal--id-" data-method="DELETE" data-path="api/cms/v1/widget-link-internal/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cms-v1-widget-link-internal--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-cms-v1-widget-link-internal--id-" onclick="tryItOut('DELETEapi-cms-v1-widget-link-internal--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-cms-v1-widget-link-internal--id-" onclick="cancelTryOut('DELETEapi-cms-v1-widget-link-internal--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-cms-v1-widget-link-internal--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/cms/v1/widget-link-internal/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-cms-v1-widget-link-internal--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-cms-v1-widget-link-internal--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-cms-v1-widget-link-internal--id-" data-component="url" required  hidden>
<br>
</p>
</form>



