# Tags

APIs for managing tags

## Display a listing of the Helix tags .

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/tags"
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
    "message": "List of Tags.",
    "data": [
        {
            "id": 1,
            "name": "tag1",
            "department_id": 8,
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
<div id="execution-results-GETapi-v1-tags" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-tags"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tags"></code></pre>
</div>
<div id="execution-error-GETapi-v1-tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tags"></code></pre>
</div>
<form id="form-GETapi-v1-tags" data-method="GET" data-path="api/v1/tags" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tags', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-tags" onclick="tryItOut('GETapi-v1-tags');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-tags" onclick="cancelTryOut('GETapi-v1-tags');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-tags" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/tags</code></b>
</p>
<p>
<label id="auth-GETapi-v1-tags" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-tags" data-component="header"></label>
</p>
</form>


## Display a listing of the Tags for Tenant.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/tags/departments/nostrum?id=15" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/tags/departments/nostrum"
);

let params = {
    "id": "15",
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
    "message": "List of Tags.",
    "data": [
        {
            "id": 1,
            "name": "tag1",
            "department_id": 8,
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
    "message": "Permission is absent."
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-tags-departments--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-tags-departments--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tags-departments--department_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-tags-departments--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tags-departments--department_id-"></code></pre>
</div>
<form id="form-GETapi-v1-tags-departments--department_id-" data-method="GET" data-path="api/v1/tags/departments/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tags-departments--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-tags-departments--department_id-" onclick="tryItOut('GETapi-v1-tags-departments--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-tags-departments--department_id-" onclick="cancelTryOut('GETapi-v1-tags-departments--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-tags-departments--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/tags/departments/{department_id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-tags-departments--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-tags-departments--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="GETapi-v1-tags-departments--department_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-tags-departments--department_id-" data-component="query"  hidden>
<br>
Department ID</p>
</form>


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/tags/autem?id=16" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"eveniet","department_id":17,"tag":{"name":"earum"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/tags/autem"
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
    "name": "eveniet",
    "department_id": 17,
    "tag": {
        "name": "earum"
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
    "message": "Created new Tag.",
    "data": {
        "id": 4,
        "name": "tag4",
        "department_id": 8,
        "created_at": "2020-11-03 00:00:00",
        "updated_at": null
    }
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "name":["The name field is required."]
  "deartment_id":["The department_id field is required."]
 }
}
```
> Example response (403):

```json
{
    "success": false,
    "code": 403,
    "message": "Permission is absent."
}
```
> Example response (500):

```json
{
    "success": false,
    "code": 500,
    "message": "Failed new Tag creation.",
    "data": null
}
```
<div id="execution-results-POSTapi-v1-tags--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-tags--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-tags--department_id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-tags--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-tags--department_id-"></code></pre>
</div>
<form id="form-POSTapi-v1-tags--department_id-" data-method="POST" data-path="api/v1/tags/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-tags--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-tags--department_id-" onclick="tryItOut('POSTapi-v1-tags--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-tags--department_id-" onclick="cancelTryOut('POSTapi-v1-tags--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-tags--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/tags/{department_id}</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-tags--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-tags--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="POSTapi-v1-tags--department_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-v1-tags--department_id-" data-component="query"  hidden>
<br>
Department ID</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-tags--department_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="department_id" data-endpoint="POSTapi-v1-tags--department_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>tag</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The tag details</summary>
<br>
<p>
<b><code>tag.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tag.name" data-endpoint="POSTapi-v1-tags--department_id-" data-component="body" required  hidden>
<br>
The tag's name</p>
</details>
</p>

</form>


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/tags/nemo?id=14" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"voluptatem","department_id":7,"tag":{"name":"laborum"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/tags/nemo"
);

let params = {
    "id": "14",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "voluptatem",
    "department_id": 7,
    "tag": {
        "name": "laborum"
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
    "message": "Updated The Tag.",
    "data": {
        "id": 4,
        "name": "tag4",
        "department_id": 6,
        "created_at": "2020-11-03 00:00:00",
        "updated_at": "2020-11-03 00:00:00"
    }
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "name":["The name field is should be a string."]
  "department_id":["The department_id field is should be a string."]
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
    "message": "Failed The Tag Update.",
    "data": null
}
```
<div id="execution-results-PUTapi-v1-tags--tag_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-tags--tag_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-tags--tag_id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-tags--tag_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-tags--tag_id-"></code></pre>
</div>
<form id="form-PUTapi-v1-tags--tag_id-" data-method="PUT" data-path="api/v1/tags/{tag_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-tags--tag_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-tags--tag_id-" onclick="tryItOut('PUTapi-v1-tags--tag_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-tags--tag_id-" onclick="cancelTryOut('PUTapi-v1-tags--tag_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-tags--tag_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/tags/{tag_id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-tags--tag_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-tags--tag_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tag_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tag_id" data-endpoint="PUTapi-v1-tags--tag_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v1-tags--tag_id-" data-component="query" required  hidden>
<br>
Tag ID</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-tags--tag_id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="department_id" data-endpoint="PUTapi-v1-tags--tag_id-" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>tag</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The tag details</summary>
<br>
<p>
<b><code>tag.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tag.name" data-endpoint="PUTapi-v1-tags--tag_id-" data-component="body"  hidden>
<br>
The tag name which store in tags table</p>
</details>
</p>

</form>


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/tags/temporibus?id=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/tags/temporibus"
);

let params = {
    "id": "3",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    "message": "Deleted The Tag.",
    "data": null
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
    "message": "Permission is absent."
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
    "message": "Failed The Tag Delete.",
    "data": null
}
```
<div id="execution-results-DELETEapi-v1-tags--tag_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-tags--tag_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-tags--tag_id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-tags--tag_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-tags--tag_id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-tags--tag_id-" data-method="DELETE" data-path="api/v1/tags/{tag_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-tags--tag_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-tags--tag_id-" onclick="tryItOut('DELETEapi-v1-tags--tag_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-tags--tag_id-" onclick="cancelTryOut('DELETEapi-v1-tags--tag_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-tags--tag_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/tags/{tag_id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-tags--tag_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-tags--tag_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tag_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tag_id" data-endpoint="DELETEapi-v1-tags--tag_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-v1-tags--tag_id-" data-component="query"  hidden>
<br>
Tag ID</p>
</form>



