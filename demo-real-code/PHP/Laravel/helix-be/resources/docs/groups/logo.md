# Logo

APIs for managing company logo

## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/logo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/logo"
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
    "message": "Logo Index",
    "data": [
        {
            "tenant_id": 1,
            "logo": "\/logos\/1.jpg",
            "logo_status": true
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
<div id="execution-results-GETapi-v1-logo" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-logo"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-logo"></code></pre>
</div>
<div id="execution-error-GETapi-v1-logo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-logo"></code></pre>
</div>
<form id="form-GETapi-v1-logo" data-method="GET" data-path="api/v1/logo" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-logo', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-logo" onclick="tryItOut('GETapi-v1-logo');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-logo" onclick="cancelTryOut('GETapi-v1-logo');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-logo" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/logo</code></b>
</p>
<p>
<label id="auth-GETapi-v1-logo" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-logo" data-component="header"></label>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/logo/tenant/nam?tenant_id=18" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/logo/tenant/nam"
);

let params = {
    "tenant_id": "18",
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
 "message": "Got Specific Logo",
 "data": {
     "tenant_id": 1
     "logo": "/logos/1.jpg"
   }
}
```
> Example response (404):

```json
{
    "success": true,
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
<div id="execution-results-GETapi-v1-logo-tenant--tenant_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-logo-tenant--tenant_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-logo-tenant--tenant_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-logo-tenant--tenant_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-logo-tenant--tenant_id-"></code></pre>
</div>
<form id="form-GETapi-v1-logo-tenant--tenant_id-" data-method="GET" data-path="api/v1/logo/tenant/{tenant_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-logo-tenant--tenant_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-logo-tenant--tenant_id-" onclick="tryItOut('GETapi-v1-logo-tenant--tenant_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-logo-tenant--tenant_id-" onclick="cancelTryOut('GETapi-v1-logo-tenant--tenant_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-logo-tenant--tenant_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/logo/tenant/{tenant_id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-logo-tenant--tenant_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-logo-tenant--tenant_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tenant_id" data-endpoint="GETapi-v1-logo-tenant--tenant_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tenant_id" data-endpoint="GETapi-v1-logo-tenant--tenant_id-" data-component="query"  hidden>
<br>
Tenant ID</p>
</form>


## Store a newly uploaded logo in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/logo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"logo":{"logo":"officia","tenant_id":12},"tenant_id":2}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/logo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "logo": {
        "logo": "officia",
        "tenant_id": 12
    },
    "tenant_id": 2
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
 "message": "Uploaded new Logo",
 "data": [
     "logo": "/logos/1.jpg",
     "tenant_id": 1
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "tenant_id":["The tenant_id field is required."],
  "logo":["The logo field must be a string."],
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
<div id="execution-results-POSTapi-v1-logo" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-logo"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-logo"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-logo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-logo"></code></pre>
</div>
<form id="form-POSTapi-v1-logo" data-method="POST" data-path="api/v1/logo" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-logo', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-logo" onclick="tryItOut('POSTapi-v1-logo');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-logo" onclick="cancelTryOut('POSTapi-v1-logo');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-logo" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/logo</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-logo" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-logo" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>logo</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The contact details</summary>
<br>
<p>
<b><code>logo.logo</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="logo.logo" data-endpoint="POSTapi-v1-logo" data-component="body" required  hidden>
<br>
The file for upload</p>
<p>
<b><code>logo.tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="logo.tenant_id" data-endpoint="POSTapi-v1-logo" data-component="body" required  hidden>
<br>
The Tenant ID</p>
</details>
</p>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tenant_id" data-endpoint="POSTapi-v1-logo" data-component="body" required  hidden>
<br>
</p>

</form>


## Update a logo in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/logo/tenant/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"logo":{"logo":"ut","tenant_id":18},"tenant_id":4}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/logo/tenant/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "logo": {
        "logo": "ut",
        "tenant_id": 18
    },
    "tenant_id": 4
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
 "message": "Uploaded new Logo",
 "data": [
     "logo": "/logos/1.jpg",
     "tenant_id: 1
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "tenant_id":["The tenant_id field is required."],
  "logo":["The logo field must be a string."],
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
<div id="execution-results-PUTapi-v1-logo-tenant--tenant_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-logo-tenant--tenant_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-logo-tenant--tenant_id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-logo-tenant--tenant_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-logo-tenant--tenant_id-"></code></pre>
</div>
<form id="form-PUTapi-v1-logo-tenant--tenant_id-" data-method="PUT" data-path="api/v1/logo/tenant/{tenant_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-logo-tenant--tenant_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-logo-tenant--tenant_id-" onclick="tryItOut('PUTapi-v1-logo-tenant--tenant_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-logo-tenant--tenant_id-" onclick="cancelTryOut('PUTapi-v1-logo-tenant--tenant_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-logo-tenant--tenant_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/logo/tenant/{tenant_id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-logo-tenant--tenant_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-logo-tenant--tenant_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tenant_id" data-endpoint="PUTapi-v1-logo-tenant--tenant_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>logo</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The contact details</summary>
<br>
<p>
<b><code>logo.logo</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="logo.logo" data-endpoint="PUTapi-v1-logo-tenant--tenant_id-" data-component="body" required  hidden>
<br>
The file for upload</p>
<p>
<b><code>logo.tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="logo.tenant_id" data-endpoint="PUTapi-v1-logo-tenant--tenant_id-" data-component="body" required  hidden>
<br>
The Tenant ID</p>
</details>
</p>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tenant_id" data-endpoint="PUTapi-v1-logo-tenant--tenant_id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/logo/tenant/tempore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/logo/tenant/tempore"
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
    "message": "Deleted The Logo",
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
<div id="execution-results-DELETEapi-v1-logo-tenant--tenant_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-logo-tenant--tenant_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-logo-tenant--tenant_id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-logo-tenant--tenant_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-logo-tenant--tenant_id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-logo-tenant--tenant_id-" data-method="DELETE" data-path="api/v1/logo/tenant/{tenant_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-logo-tenant--tenant_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-logo-tenant--tenant_id-" onclick="tryItOut('DELETEapi-v1-logo-tenant--tenant_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-logo-tenant--tenant_id-" onclick="cancelTryOut('DELETEapi-v1-logo-tenant--tenant_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-logo-tenant--tenant_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/logo/tenant/{tenant_id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-logo-tenant--tenant_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-logo-tenant--tenant_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tenant_id" data-endpoint="DELETEapi-v1-logo-tenant--tenant_id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Change status of logo in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/logo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"tenant_id":1,"logo_status":false,"logo":{"logo_status":false,"tenant_id":15}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/logo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tenant_id": 1,
    "logo_status": false,
    "logo": {
        "logo_status": false,
        "tenant_id": 15
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
 "message": "Status was changed.",
 "data": [
     "logo": "/logos/1.jpg",
     "tenant_id": 1,
     "logo_status": true
 ]
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "tenant_id":["The tenant_id field is required."],
  "logo_status":["The logo_status field must be a boolean."],
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
<div id="execution-results-PUTapi-v1-logo" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-logo"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-logo"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-logo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-logo"></code></pre>
</div>
<form id="form-PUTapi-v1-logo" data-method="PUT" data-path="api/v1/logo" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-logo', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-logo" onclick="tryItOut('PUTapi-v1-logo');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-logo" onclick="cancelTryOut('PUTapi-v1-logo');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-logo" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/logo</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-logo" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-logo" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tenant_id" data-endpoint="PUTapi-v1-logo" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>logo_status</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-v1-logo" hidden><input type="radio" name="logo_status" value="true" data-endpoint="PUTapi-v1-logo" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-v1-logo" hidden><input type="radio" name="logo_status" value="false" data-endpoint="PUTapi-v1-logo" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<details>
<summary>
<b><code>logo</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The contact details</summary>
<br>
<p>
<b><code>logo.logo_status</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-v1-logo" hidden><input type="radio" name="logo.logo_status" value="true" data-endpoint="PUTapi-v1-logo" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-v1-logo" hidden><input type="radio" name="logo.logo_status" value="false" data-endpoint="PUTapi-v1-logo" data-component="body" required ><code>false</code></label>
<br>
The status of the logo</p>
<p>
<b><code>logo.tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="logo.tenant_id" data-endpoint="PUTapi-v1-logo" data-component="body" required  hidden>
<br>
The Tenant ID</p>
</details>
</p>

</form>



