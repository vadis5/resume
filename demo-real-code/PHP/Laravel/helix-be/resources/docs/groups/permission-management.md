# Permission management

APIs for managing permissions

## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/permissions"
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
    "message": "Created Permission Index.",
    "data": [
        {
            "id": 4,
            "name": "users store",
            "guard_name": "api",
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
    "message": "Permission is absent"
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-permissions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-permissions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-permissions"></code></pre>
</div>
<div id="execution-error-GETapi-v1-permissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-permissions"></code></pre>
</div>
<form id="form-GETapi-v1-permissions" data-method="GET" data-path="api/v1/permissions" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-permissions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-permissions" onclick="tryItOut('GETapi-v1-permissions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-permissions" onclick="cancelTryOut('GETapi-v1-permissions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-permissions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/permissions</code></b>
</p>
<p>
<label id="auth-GETapi-v1-permissions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-permissions" data-component="header"></label>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/permissions/et?id=13" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/permissions/et"
);

let params = {
    "id": "13",
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
    "message": "Got Specific Permission.",
    "data": {
        "id": 4,
        "name": "users store",
        "guard_name": "api",
        "created_at": "2020-11-03 00:00:00",
        "updated_at": "2020-11-03 00:00:00"
    }
}
```
> Example response (404):

```json
{
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
    "message": "Permission is absent"
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-permissions--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-permissions--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-permissions--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-permissions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-permissions--id-"></code></pre>
</div>
<form id="form-GETapi-v1-permissions--id-" data-method="GET" data-path="api/v1/permissions/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-permissions--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-permissions--id-" onclick="tryItOut('GETapi-v1-permissions--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-permissions--id-" onclick="cancelTryOut('GETapi-v1-permissions--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-permissions--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/permissions/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-permissions--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-permissions--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-permissions--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-permissions--id-" data-component="query"  hidden>
<br>
Permission ID</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"cumque","guard_name":"nulla","permission":{"name":"qui","guard_name":"debitis"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "cumque",
    "guard_name": "nulla",
    "permission": {
        "name": "qui",
        "guard_name": "debitis"
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
 "message": "Created new Permission.",
 "data": [
    "id": 4,
    "name": "users store",
    "guard_name": "api",
    "created_at": "2020-11-03 00:00:00",
    "updated_at": null
 ]
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name field is required."
        ],
        "guard_name": [
            "The guard name field is required."
        ]
    }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent"
}
```
> Example response (500):

```json
{
    "success": false,
    "code": 500,
    "message": "Failed new Permission creation.",
    "data": null
}
```
<div id="execution-results-POSTapi-v1-permissions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-permissions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-permissions"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-permissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-permissions"></code></pre>
</div>
<form id="form-POSTapi-v1-permissions" data-method="POST" data-path="api/v1/permissions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-permissions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-permissions" onclick="tryItOut('POSTapi-v1-permissions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-permissions" onclick="cancelTryOut('POSTapi-v1-permissions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-permissions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/permissions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-permissions" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>guard_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="guard_name" data-endpoint="POSTapi-v1-permissions" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>permission</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The permissions details</summary>
<br>
<p>
<b><code>permission.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission.name" data-endpoint="POSTapi-v1-permissions" data-component="body" required  hidden>
<br>
The permission name which store in permission</p>
<p>
<b><code>permission.guard_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission.guard_name" data-endpoint="POSTapi-v1-permissions" data-component="body" required  hidden>
<br>
The permission guard name which store in permission</p>
</details>
</p>

</form>


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/permissions/neque?id=16" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"voluptatem","guard_name":"eaque","permission":{"name":"dignissimos","guard_name":"autem"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/permissions/neque"
);

let params = {
    "id": "16",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "voluptatem",
    "guard_name": "eaque",
    "permission": {
        "name": "dignissimos",
        "guard_name": "autem"
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
 "message": "Updated The Permission.",
 "data": {
    "id": 4,
    "name": "users store",
    "guard_name": "api",
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
 }
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "name":["The name field is should be a string."],
  "guard_name":["The guard name field is should be a string."],
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
    "message": "Permission is absent"
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
> Example response (500):

```json
{
    "success": false,
    "code": 500,
    "message": "Failed The Permission Update.",
    "data": null
}
```
<div id="execution-results-PUTapi-v1-permissions--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-permissions--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-permissions--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-permissions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-permissions--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-permissions--id-" data-method="PUT" data-path="api/v1/permissions/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-permissions--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-permissions--id-" onclick="tryItOut('PUTapi-v1-permissions--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-permissions--id-" onclick="cancelTryOut('PUTapi-v1-permissions--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-permissions--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/permissions/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-permissions--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-permissions--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-permissions--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v1-permissions--id-" data-component="query" required  hidden>
<br>
Permission ID</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-permissions--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>guard_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="guard_name" data-endpoint="PUTapi-v1-permissions--id-" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>permission</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The permissions details</summary>
<br>
<p>
<b><code>permission.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="permission.name" data-endpoint="PUTapi-v1-permissions--id-" data-component="body"  hidden>
<br>
The permission name which store in permission</p>
<p>
<b><code>permission.guard_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="permission.guard_name" data-endpoint="PUTapi-v1-permissions--id-" data-component="body"  hidden>
<br>
The permission guard name which store in permission</p>
</details>
</p>

</form>


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/permissions/nulla" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/permissions/nulla"
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
 "message": "Deleted The Permission.",
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
 "message": "Permission is absent",
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
> Example response (500):

```json
{
    "success": false,
    "code": 500,
    "message": "Failed The Permission Delete.",
    "data": null
}
```
<div id="execution-results-DELETEapi-v1-permissions--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-permissions--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-permissions--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-permissions--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-permissions--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-permissions--id-" data-method="DELETE" data-path="api/v1/permissions/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-permissions--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-permissions--id-" onclick="tryItOut('DELETEapi-v1-permissions--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-permissions--id-" onclick="cancelTryOut('DELETEapi-v1-permissions--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-permissions--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/permissions/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-permissions--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-permissions--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-permissions--id-" data-component="url" required  hidden>
<br>
</p>
</form>



