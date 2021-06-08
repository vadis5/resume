# Course Widget Types

APIs for managing Course Widget Types

## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/courseWidgetTypes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courseWidgetTypes"
);

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
    "message": "Course Widget Types Index.",
    "data": [
        {
            "id": 4,
            "type": "video",
            "created_at": "2020-11-03 00:00:00",
            "updated_at": "2020-11-03 00:00:00"
        }
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
<div id="execution-results-GETapi-v1-courseWidgetTypes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-courseWidgetTypes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-courseWidgetTypes"></code></pre>
</div>
<div id="execution-error-GETapi-v1-courseWidgetTypes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-courseWidgetTypes"></code></pre>
</div>
<form id="form-GETapi-v1-courseWidgetTypes" data-method="GET" data-path="api/v1/courseWidgetTypes" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-courseWidgetTypes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-courseWidgetTypes" onclick="tryItOut('GETapi-v1-courseWidgetTypes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-courseWidgetTypes" onclick="cancelTryOut('GETapi-v1-courseWidgetTypes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-courseWidgetTypes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/courseWidgetTypes</code></b>
</p>
<p>
<label id="auth-GETapi-v1-courseWidgetTypes" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-courseWidgetTypes" data-component="header"></label>
</p>
</form>


## Display the specified course widget type.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/courseWidgetTypes/magnam?id=2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courseWidgetTypes/magnam"
);

let params = {
    "id": "2",
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
 "message": "Got specific Course Widget Type.",
 "data": {
    "id": 4,
    "type": "video",
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
}
```
> Example response (460):

```json
{
    "success": false,
    "code": 460,
    "message": "Wrong ID.",
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
<div id="execution-results-GETapi-v1-courseWidgetTypes--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-courseWidgetTypes--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-courseWidgetTypes--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-courseWidgetTypes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-courseWidgetTypes--id-"></code></pre>
</div>
<form id="form-GETapi-v1-courseWidgetTypes--id-" data-method="GET" data-path="api/v1/courseWidgetTypes/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-courseWidgetTypes--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-courseWidgetTypes--id-" onclick="tryItOut('GETapi-v1-courseWidgetTypes--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-courseWidgetTypes--id-" onclick="cancelTryOut('GETapi-v1-courseWidgetTypes--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-courseWidgetTypes--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/courseWidgetTypes/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-courseWidgetTypes--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-courseWidgetTypes--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-courseWidgetTypes--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-courseWidgetTypes--id-" data-component="query"  hidden>
<br>
Course Widget Type ID</p>
</form>


## Store a newly created course widget type

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/courseWidgetTypes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"eum","courseWidgetType":{"type":"harum"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courseWidgetTypes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "eum",
    "courseWidgetType": {
        "type": "harum"
    }
}

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
 "message": "Created new Course Widget Type.",
 "data": [
    "id": 4,
    "type": "video",
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "type":["The type field is required."],
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
<div id="execution-results-POSTapi-v1-courseWidgetTypes" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-courseWidgetTypes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-courseWidgetTypes"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-courseWidgetTypes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-courseWidgetTypes"></code></pre>
</div>
<form id="form-POSTapi-v1-courseWidgetTypes" data-method="POST" data-path="api/v1/courseWidgetTypes" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-courseWidgetTypes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-courseWidgetTypes" onclick="tryItOut('POSTapi-v1-courseWidgetTypes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-courseWidgetTypes" onclick="cancelTryOut('POSTapi-v1-courseWidgetTypes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-courseWidgetTypes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/courseWidgetTypes</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-courseWidgetTypes" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-courseWidgetTypes" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="POSTapi-v1-courseWidgetTypes" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>courseWidgetType</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The course widget type object</summary>
<br>
<p>
<b><code>courseWidgetType.type</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="courseWidgetType.type" data-endpoint="POSTapi-v1-courseWidgetTypes" data-component="body"  hidden>
<br>
The course widget type object type</p>
</details>
</p>

</form>


## Update the specified course widget type in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/courseWidgetTypes/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"omnis","courseWidgetType":{"type":"ad"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courseWidgetTypes/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "omnis",
    "courseWidgetType": {
        "type": "ad"
    }
}

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
 "message": "Updated The Course Widget Type.",
 "data": [
    "id": 4,
    "type": "video",
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "type":["The type field is required."],
 }
}

* @response   460 {
 "success": false,
 "code": 460,
 "message": "Wrong ID.",
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
<div id="execution-results-PUTapi-v1-courseWidgetTypes--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-courseWidgetTypes--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-courseWidgetTypes--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-courseWidgetTypes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-courseWidgetTypes--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-courseWidgetTypes--id-" data-method="PUT" data-path="api/v1/courseWidgetTypes/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-courseWidgetTypes--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-courseWidgetTypes--id-" onclick="tryItOut('PUTapi-v1-courseWidgetTypes--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-courseWidgetTypes--id-" onclick="cancelTryOut('PUTapi-v1-courseWidgetTypes--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-courseWidgetTypes--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/courseWidgetTypes/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-courseWidgetTypes--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-courseWidgetTypes--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-courseWidgetTypes--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="PUTapi-v1-courseWidgetTypes--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>courseWidgetType</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The course widget type object</summary>
<br>
<p>
<b><code>courseWidgetType.type</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="courseWidgetType.type" data-endpoint="PUTapi-v1-courseWidgetTypes--id-" data-component="body"  hidden>
<br>
The course widget type object type</p>
</details>
</p>

</form>


## Remove the specified course widget type.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/courseWidgetTypes/voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/courseWidgetTypes/voluptates"
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
 "message": "Deleted The Course Widget Type.",
 "data": null
}

* @response   460 {
 "success": false,
 "code": 460,
 "message": "Wrong ID.",
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
<div id="execution-results-DELETEapi-v1-courseWidgetTypes--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-courseWidgetTypes--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-courseWidgetTypes--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-courseWidgetTypes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-courseWidgetTypes--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-courseWidgetTypes--id-" data-method="DELETE" data-path="api/v1/courseWidgetTypes/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-courseWidgetTypes--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-courseWidgetTypes--id-" onclick="tryItOut('DELETEapi-v1-courseWidgetTypes--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-courseWidgetTypes--id-" onclick="cancelTryOut('DELETEapi-v1-courseWidgetTypes--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-courseWidgetTypes--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/courseWidgetTypes/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-courseWidgetTypes--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-courseWidgetTypes--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-courseWidgetTypes--id-" data-component="url" required  hidden>
<br>
</p>
</form>



