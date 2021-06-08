# Builder/Sequences

APIs for managing sequences

## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/mobile/v1/builder/nostrum?id=4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/mobile/v1/builder/nostrum"
);

let params = {
    "id": "4",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got Specific Sequence",
 "data": {
    "id": 4,
    "name": "Super Admin",
    "order": 1,
    "widget_type_id": 1,
    "specific_id": 1,
    "previous_id": 1,
    "widget_included" =>
       [
          "id": 1,
          "widget_type_id": 1,
          "button_text": "next",
          "settings_id": 1,
          "created_at": "2020-11-03 00:00:00",
          "updated_at": "2020-11-03 00:00:00"
       ],
    "widget_settings" => [],
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00"
   }
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-mobile-v1-builder--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-mobile-v1-builder--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mobile-v1-builder--id-"></code></pre>
</div>
<div id="execution-error-GETapi-mobile-v1-builder--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mobile-v1-builder--id-"></code></pre>
</div>
<form id="form-GETapi-mobile-v1-builder--id-" data-method="GET" data-path="api/mobile/v1/builder/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-mobile-v1-builder--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-mobile-v1-builder--id-" onclick="tryItOut('GETapi-mobile-v1-builder--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-mobile-v1-builder--id-" onclick="cancelTryOut('GETapi-mobile-v1-builder--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-mobile-v1-builder--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/mobile/v1/builder/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-mobile-v1-builder--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-mobile-v1-builder--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-mobile-v1-builder--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-mobile-v1-builder--id-" data-component="query"  hidden>
<br>
Sequence ID</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/mobile/v1/builder/modules/eligendi?id=4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/mobile/v1/builder/modules/eligendi"
);

let params = {
    "id": "4",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Got Specific Sequence",
 "data": {
    "id",
    "name",
    "order",
    "widget_type_id",
    "specific_id",
    "previous_id",
    "widget_included" =>
       [
          "id": 1,
          "widget_type_id": 1,
          "button_text": "next",
          "settings_id": 1,
          "created_at": "2020-11-03 00:00:00",
          "updated_at": "2020-11-03 00:00:00"
        ],
    "widget_settings" => [],
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00"
   }
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent",
    "data": null
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-mobile-v1-builder-modules--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-mobile-v1-builder-modules--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mobile-v1-builder-modules--id-"></code></pre>
</div>
<div id="execution-error-GETapi-mobile-v1-builder-modules--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mobile-v1-builder-modules--id-"></code></pre>
</div>
<form id="form-GETapi-mobile-v1-builder-modules--id-" data-method="GET" data-path="api/mobile/v1/builder/modules/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-mobile-v1-builder-modules--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-mobile-v1-builder-modules--id-" onclick="tryItOut('GETapi-mobile-v1-builder-modules--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-mobile-v1-builder-modules--id-" onclick="cancelTryOut('GETapi-mobile-v1-builder-modules--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-mobile-v1-builder-modules--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/mobile/v1/builder/modules/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-mobile-v1-builder-modules--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-mobile-v1-builder-modules--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-mobile-v1-builder-modules--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-mobile-v1-builder-modules--id-" data-component="query"  hidden>
<br>
Module ID</p>
</form>



