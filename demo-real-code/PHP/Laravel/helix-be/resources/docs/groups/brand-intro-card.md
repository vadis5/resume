# Brand Intro Card

APIs for managing Intro Cards

## Display a listing of the Intro Cards for Super Admin.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/introCards" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/introCards"
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
 "message": "Into Cards Index.",
 "data": [
   {
     "id": 1,
     "tenant_id": 1,
     "intro_card": "introCards/1.jpg,
     "active": 1,
     "created_at": null,
     "updated_at": null
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
<div id="execution-results-GETapi-v1-introCards" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-introCards"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-introCards"></code></pre>
</div>
<div id="execution-error-GETapi-v1-introCards" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-introCards"></code></pre>
</div>
<form id="form-GETapi-v1-introCards" data-method="GET" data-path="api/v1/introCards" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-introCards', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-introCards" onclick="tryItOut('GETapi-v1-introCards');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-introCards" onclick="cancelTryOut('GETapi-v1-introCards');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-introCards" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/introCards</code></b>
</p>
<p>
<label id="auth-GETapi-v1-introCards" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-introCards" data-component="header"></label>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/introCards/tenants/omnis?tenant_id=8" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/introCards/tenants/omnis"
);

let params = {
    "tenant_id": "8",
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
 "message": "Got specific Intro Card.",
 "data": {
     "id": 1,
     "tenant_id": 1,
     "intro_card": "introCards/1.jpg,
     "active": 1,
     "created_at": null,
     "updated_at": null
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
    "message": "Permission is absent."
}
```
> Example response (401):

```json
{
    "error": "Unauthorized"
}
```
<div id="execution-results-GETapi-v1-introCards-tenants--tenant_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-introCards-tenants--tenant_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-introCards-tenants--tenant_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-introCards-tenants--tenant_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-introCards-tenants--tenant_id-"></code></pre>
</div>
<form id="form-GETapi-v1-introCards-tenants--tenant_id-" data-method="GET" data-path="api/v1/introCards/tenants/{tenant_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-introCards-tenants--tenant_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-introCards-tenants--tenant_id-" onclick="tryItOut('GETapi-v1-introCards-tenants--tenant_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-introCards-tenants--tenant_id-" onclick="cancelTryOut('GETapi-v1-introCards-tenants--tenant_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-introCards-tenants--tenant_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/introCards/tenants/{tenant_id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-introCards-tenants--tenant_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-introCards-tenants--tenant_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tenant_id" data-endpoint="GETapi-v1-introCards-tenants--tenant_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tenant_id" data-endpoint="GETapi-v1-introCards-tenants--tenant_id-" data-component="query"  hidden>
<br>
Tenant ID</p>
</form>


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/introCards" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"intro_card":"est","tenant_id":10,"introCards":{"tenant_id":20,"intro_card":13}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/introCards"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "intro_card": "est",
    "tenant_id": 10,
    "introCards": {
        "tenant_id": 20,
        "intro_card": 13
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
 "message": "Created new Intro Card.",
 "data": {
     "id": 1,
     "tenant_id": 1,
     "intro_card": "introCards/1.jpg,
     "active": 1,
     "created_at": null,
     "updated_at": null
 }
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "tenant_id":["The tenant id has already been taken."],
  "intro_card":["The intro card field is required."],
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
    "message": "Failed to create new Intro Card.",
    "data": null
}
```
<div id="execution-results-POSTapi-v1-introCards" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-introCards"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-introCards"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-introCards" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-introCards"></code></pre>
</div>
<form id="form-POSTapi-v1-introCards" data-method="POST" data-path="api/v1/introCards" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-introCards', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-introCards" onclick="tryItOut('POSTapi-v1-introCards');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-introCards" onclick="cancelTryOut('POSTapi-v1-introCards');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-introCards" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/introCards</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-introCards" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-introCards" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>intro_card</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="intro_card" data-endpoint="POSTapi-v1-introCards" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tenant_id" data-endpoint="POSTapi-v1-introCards" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>introCards</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The Intro Cards details</summary>
<br>
<p>
<b><code>introCards.tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="introCards.tenant_id" data-endpoint="POSTapi-v1-introCards" data-component="body" required  hidden>
<br>
The tenant's id</p>
<p>
<b><code>introCards.intro_card</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="introCards.intro_card" data-endpoint="POSTapi-v1-introCards" data-component="body" required  hidden>
<br>
The Uploaded file</p>
</details>
</p>

</form>


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/introCards/tenants/incidunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"intro_card":"adipisci"}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/introCards/tenants/incidunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "intro_card": "adipisci"
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
 "message": "Updated The Intro Card.",
 "data": {
     "id": 1,
     "tenant_id": 1,
     "intro_card": "introCards/1.jpg,
     "active": 1,
     "created_at": null,
     "updated_at": null
 }
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "tenant_id":["The tenant id has already been taken."],
  "intro_card":["The intro card field is required."],
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
    "message": "Failed The Intro Card update.",
    "data": null
}
```
<div id="execution-results-PUTapi-v1-introCards-tenants--tenant_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-introCards-tenants--tenant_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-introCards-tenants--tenant_id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-introCards-tenants--tenant_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-introCards-tenants--tenant_id-"></code></pre>
</div>
<form id="form-PUTapi-v1-introCards-tenants--tenant_id-" data-method="PUT" data-path="api/v1/introCards/tenants/{tenant_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-introCards-tenants--tenant_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-introCards-tenants--tenant_id-" onclick="tryItOut('PUTapi-v1-introCards-tenants--tenant_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-introCards-tenants--tenant_id-" onclick="cancelTryOut('PUTapi-v1-introCards-tenants--tenant_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-introCards-tenants--tenant_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/introCards/tenants/{tenant_id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-introCards-tenants--tenant_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-introCards-tenants--tenant_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tenant_id" data-endpoint="PUTapi-v1-introCards-tenants--tenant_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>intro_card</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="intro_card" data-endpoint="PUTapi-v1-introCards-tenants--tenant_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>introCards</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>
</summary>
<br>
<p>
<b><code>introCards.intro_card</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="introCards.intro_card" data-endpoint="PUTapi-v1-introCards-tenants--tenant_id-" data-component="body" required  hidden>
<br>
The Uploaded file</p>
</details>
</p>

</form>


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/introCards/tenants/aliquid?tenant_id=15" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/introCards/tenants/aliquid"
);

let params = {
    "tenant_id": "15",
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
 "message": "Deleted The Intro Card.",
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
    "message": "Failed The Intro Card delete.",
    "data": null
}
```
<div id="execution-results-DELETEapi-v1-introCards-tenants--tenant_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-introCards-tenants--tenant_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-introCards-tenants--tenant_id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-introCards-tenants--tenant_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-introCards-tenants--tenant_id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-introCards-tenants--tenant_id-" data-method="DELETE" data-path="api/v1/introCards/tenants/{tenant_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-introCards-tenants--tenant_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-introCards-tenants--tenant_id-" onclick="tryItOut('DELETEapi-v1-introCards-tenants--tenant_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-introCards-tenants--tenant_id-" onclick="cancelTryOut('DELETEapi-v1-introCards-tenants--tenant_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-introCards-tenants--tenant_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/introCards/tenants/{tenant_id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-introCards-tenants--tenant_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-introCards-tenants--tenant_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tenant_id" data-endpoint="DELETEapi-v1-introCards-tenants--tenant_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tenant_id" data-endpoint="DELETEapi-v1-introCards-tenants--tenant_id-" data-component="query"  hidden>
<br>
Tenant ID</p>
</form>


## Change status of the specified Intro Card.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/introCards/activate/omnis?id=7" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/introCards/activate/omnis"
);

let params = {
    "id": "7",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "success": true,
 "code": 200,
 "message": "Status 'active' was changed.",
 "data": [
     "id": 1,
     "tenant_id": 1,
     "intro_card": "introCards/1.jpg,
     "active": 1,
     "created_at": null,
     "updated_at": null
 }
]

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
    "message": "Failed The Intro Card Activation.",
    "data": null
}
```
<div id="execution-results-PUTapi-v1-introCards-activate--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-introCards-activate--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-introCards-activate--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-introCards-activate--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-introCards-activate--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-introCards-activate--id-" data-method="PUT" data-path="api/v1/introCards/activate/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-introCards-activate--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-introCards-activate--id-" onclick="tryItOut('PUTapi-v1-introCards-activate--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-introCards-activate--id-" onclick="cancelTryOut('PUTapi-v1-introCards-activate--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-introCards-activate--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/introCards/activate/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-introCards-activate--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-introCards-activate--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-introCards-activate--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v1-introCards-activate--id-" data-component="query"  hidden>
<br>
Intro Card ID</p>
</form>



