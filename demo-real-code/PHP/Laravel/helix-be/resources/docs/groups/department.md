# Department

APIs for managing departments

## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/departments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/departments"
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
 "message": "Created Department Index",
 "data": [
    "id": 3,
    "name": "Dep-3",
    "short_name": "d3",
    "parent_id": 1,
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
    "parent": {
      id": 1,
      "name": "Dep-1",
      "short_name": "d1",
      "parent_id": null,
      "created_at": null,
      "updated_at": null,
      "parent": null
     },
    "children": {
      id": 5,
      "name": "Dep-5",
      "short_name": "d5",
      "parent_id": 3,
      "created_at": null,
      "updated_at": null,
      "parent": null
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
<div id="execution-results-GETapi-v1-departments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-departments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-departments"></code></pre>
</div>
<div id="execution-error-GETapi-v1-departments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-departments"></code></pre>
</div>
<form id="form-GETapi-v1-departments" data-method="GET" data-path="api/v1/departments" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-departments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-departments" onclick="tryItOut('GETapi-v1-departments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-departments" onclick="cancelTryOut('GETapi-v1-departments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-departments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/departments</code></b>
</p>
<p>
<label id="auth-GETapi-v1-departments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-departments" data-component="header"></label>
</p>
</form>


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/departments/tenants/sunt?id=12" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/departments/tenants/sunt"
);

let params = {
    "id": "12",
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
 "message": "Created Department Index.",
 "data": [
    "id": 3,
    "name": "Dep-3",
    "short_name": "d3",
    "parent_id": 1,
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
    "parent": {
      id": 1,
      "name": "Dep-1",
      "short_name": "d1",
      "parent_id": null,
      "created_at": null,
      "updated_at": null,
      "parent": null
     },
    "children": {
      id": 5,
      "name": "Dep-5",
      "short_name": "d5",
      "parent_id": 3,
      "created_at": null,
      "updated_at": null,
      "parent": null
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
<div id="execution-results-GETapi-v1-departments-tenants--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-departments-tenants--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-departments-tenants--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-departments-tenants--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-departments-tenants--id-"></code></pre>
</div>
<form id="form-GETapi-v1-departments-tenants--id-" data-method="GET" data-path="api/v1/departments/tenants/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-departments-tenants--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-departments-tenants--id-" onclick="tryItOut('GETapi-v1-departments-tenants--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-departments-tenants--id-" onclick="cancelTryOut('GETapi-v1-departments-tenants--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-departments-tenants--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/departments/tenants/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-departments-tenants--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-departments-tenants--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-departments-tenants--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-departments-tenants--id-" data-component="query"  hidden>
<br>
Tenant ID</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/departments/nam?id=9" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/departments/nam"
);

let params = {
    "id": "9",
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
 "message": "Got Specific Department",
 "data": {
    "id": 3,
    "name": "Dep-3",
    "short_name": "d3",
    "parent_id": 1,
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
    "parent": {
      id": 1,
      "name": "Dep-1",
      "short_name": "d1",
      "parent_id": null,
      "created_at": null,
      "updated_at": null,
      "parent": null
     },
    "children": {
      id": 5,
      "name": "Dep-5",
      "short_name": "d5",
      "parent_id": 3,
      "created_at": null,
      "updated_at": null,
      "parent": null
     }
   }
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
<div id="execution-results-GETapi-v1-departments--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-departments--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-departments--department_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-departments--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-departments--department_id-"></code></pre>
</div>
<form id="form-GETapi-v1-departments--department_id-" data-method="GET" data-path="api/v1/departments/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-departments--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-departments--department_id-" onclick="tryItOut('GETapi-v1-departments--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-departments--department_id-" onclick="cancelTryOut('GETapi-v1-departments--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-departments--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/departments/{department_id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-departments--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-departments--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="GETapi-v1-departments--department_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-departments--department_id-" data-component="query"  hidden>
<br>
Department ID</p>
</form>


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/departments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"omnis","short_name":"enim","parent_id":13,"tenant_id":14,"department":{"name":"est","short_name":"voluptatem","parent_id":15,"tenant_id":4}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/departments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "omnis",
    "short_name": "enim",
    "parent_id": 13,
    "tenant_id": 14,
    "department": {
        "name": "est",
        "short_name": "voluptatem",
        "parent_id": 15,
        "tenant_id": 4
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
 "message": "Created New Department",
 "data": [
    "id": 3,
    "name": "Dep-3",
    "short_name": "d3",
    "parent_id": 1,
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
    "parent": {
      id": 1,
      "name": "Dep-1",
      "short_name": "d1",
      "parent_id": null,
      "created_at": null,
      "updated_at": null,
      "parent": null
     },
   "children": {
      id": 5,
      "name": "Dep-5",
      "short_name": "d5",
      "parent_id": 3,
      "created_at": null,
      "updated_at": null,
      "parent": null
     }
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "name":["The name field is required."],
  "short_name":["The short name must be a string."],
  "parent_id":["The selected parent id is invalid."],
 }
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
<div id="execution-results-POSTapi-v1-departments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-departments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-departments"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-departments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-departments"></code></pre>
</div>
<form id="form-POSTapi-v1-departments" data-method="POST" data-path="api/v1/departments" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-departments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-departments" onclick="tryItOut('POSTapi-v1-departments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-departments" onclick="cancelTryOut('POSTapi-v1-departments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-departments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/departments</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-departments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-departments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-departments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>short_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="short_name" data-endpoint="POSTapi-v1-departments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="parent_id" data-endpoint="POSTapi-v1-departments" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tenant_id" data-endpoint="POSTapi-v1-departments" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>department</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The department details</summary>
<br>
<p>
<b><code>department.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department.name" data-endpoint="POSTapi-v1-departments" data-component="body" required  hidden>
<br>
The department's name</p>
<p>
<b><code>department.short_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department.short_name" data-endpoint="POSTapi-v1-departments" data-component="body" required  hidden>
<br>
The department's short name</p>
<p>
<b><code>department.parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="department.parent_id" data-endpoint="POSTapi-v1-departments" data-component="body"  hidden>
<br>
nullable The department's parent id</p>
<p>
<b><code>department.tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="department.tenant_id" data-endpoint="POSTapi-v1-departments" data-component="body"  hidden>
<br>
The tenant id for department</p>
</details>
</p>

</form>


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/departments/reprehenderit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quibusdam","short_name":"quis","parent_id":1,"tenant_id":17,"department":{"name":"maxime","short_name":"accusantium","parent_id":6}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/departments/reprehenderit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quibusdam",
    "short_name": "quis",
    "parent_id": 1,
    "tenant_id": 17,
    "department": {
        "name": "maxime",
        "short_name": "accusantium",
        "parent_id": 6
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
 "message": "Updated The Department.",
 "data": {
    "id": 3,
    "name": "Dep-3",
    "short_name": "d3",
    "parent_id": 1,
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00",
    "parent": {
      id": 1,
      "name": "Dep-1",
      "short_name": "d1",
      "parent_id": null,
      "created_at": null,
      "updated_at": null,
      "parent": null
     }
 }
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "name":["The name must be a string."],
  "short_name":["The short name must be a string."],
  "parent_id":["The selected parent id is invalid."],
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
<div id="execution-results-PUTapi-v1-departments--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-departments--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-departments--department_id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-departments--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-departments--department_id-"></code></pre>
</div>
<form id="form-PUTapi-v1-departments--department_id-" data-method="PUT" data-path="api/v1/departments/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-departments--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-departments--department_id-" onclick="tryItOut('PUTapi-v1-departments--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-departments--department_id-" onclick="cancelTryOut('PUTapi-v1-departments--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-departments--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/departments/{department_id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-departments--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-departments--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="PUTapi-v1-departments--department_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-departments--department_id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>short_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="short_name" data-endpoint="PUTapi-v1-departments--department_id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="parent_id" data-endpoint="PUTapi-v1-departments--department_id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tenant_id" data-endpoint="PUTapi-v1-departments--department_id-" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>department</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The department details</summary>
<br>
<p>
<b><code>department.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="department.name" data-endpoint="PUTapi-v1-departments--department_id-" data-component="body"  hidden>
<br>
The department's name</p>
<p>
<b><code>department.short_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="department.short_name" data-endpoint="PUTapi-v1-departments--department_id-" data-component="body"  hidden>
<br>
The department's short name</p>
<p>
<b><code>department.parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="department.parent_id" data-endpoint="PUTapi-v1-departments--department_id-" data-component="body"  hidden>
<br>
nullable The department's parent id</p>
</details>
</p>

</form>


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/departments/illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/departments/illo"
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
 "message": "Deleted The Department.",
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
<div id="execution-results-DELETEapi-v1-departments--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-departments--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-departments--department_id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-departments--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-departments--department_id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-departments--department_id-" data-method="DELETE" data-path="api/v1/departments/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-departments--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-departments--department_id-" onclick="tryItOut('DELETEapi-v1-departments--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-departments--department_id-" onclick="cancelTryOut('DELETEapi-v1-departments--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-departments--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/departments/{department_id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-departments--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-departments--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="DELETEapi-v1-departments--department_id-" data-component="url" required  hidden>
<br>
</p>
</form>



