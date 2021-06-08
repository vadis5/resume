# Brand Primary Colour

APIs for managing Brand Primary Colours

## Display a listing of the Brand Primary Colours for Super Admin.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/brandColours" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/brandColours"
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
    "message": "Brand Primary Colour Index.",
    "data": [
        {
            "id": 1,
            "tenant_id": 1,
            "red": 10,
            "green": 232,
            "blue": 201,
            "active": 1,
            "created_at": null,
            " *      updated_at": null
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
<div id="execution-results-GETapi-v1-brandColours" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-brandColours"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-brandColours"></code></pre>
</div>
<div id="execution-error-GETapi-v1-brandColours" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-brandColours"></code></pre>
</div>
<form id="form-GETapi-v1-brandColours" data-method="GET" data-path="api/v1/brandColours" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-brandColours', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-brandColours" onclick="tryItOut('GETapi-v1-brandColours');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-brandColours" onclick="cancelTryOut('GETapi-v1-brandColours');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-brandColours" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/brandColours</code></b>
</p>
<p>
<label id="auth-GETapi-v1-brandColours" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-brandColours" data-component="header"></label>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/brandColours/aut?id=19" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/brandColours/aut"
);

let params = {
    "id": "19",
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
    "message": "Got Specific Brand Primary Colour.",
    "data": {
        "id": 1,
        "tenant_id": 1,
        "red": 10,
        "green": 232,
        "blue": 201,
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
<div id="execution-results-GETapi-v1-brandColours--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-brandColours--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-brandColours--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-brandColours--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-brandColours--id-"></code></pre>
</div>
<form id="form-GETapi-v1-brandColours--id-" data-method="GET" data-path="api/v1/brandColours/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-brandColours--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-brandColours--id-" onclick="tryItOut('GETapi-v1-brandColours--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-brandColours--id-" onclick="cancelTryOut('GETapi-v1-brandColours--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-brandColours--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/brandColours/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-brandColours--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-brandColours--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-brandColours--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-brandColours--id-" data-component="query"  hidden>
<br>
Brand Primary Colour ID</p>
</form>


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/brandColours" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"tenant_id":10,"red":6,"green":19,"blue":9,"brandPrimaryColours":{"tenant_id":20,"red":8,"green":9,"blue":16}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/brandColours"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tenant_id": 10,
    "red": 6,
    "green": 19,
    "blue": 9,
    "brandPrimaryColours": {
        "tenant_id": 20,
        "red": 8,
        "green": 9,
        "blue": 16
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
    "message": "Created new Brand Primary Colour.",
    "data": {
        "id": 1,
        "tenant_id": 1,
        "red": 10,
        "green": 232,
        "blue": 201,
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
  "red":["The red may not be greater than 255."],
  "green":["The green must be an integer."],
  "blue":["The blue must be an integer."],
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
    "message": "Failed new Brand Primary Colour creation.",
    "data": null
}
```
<div id="execution-results-POSTapi-v1-brandColours" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-brandColours"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-brandColours"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-brandColours" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-brandColours"></code></pre>
</div>
<form id="form-POSTapi-v1-brandColours" data-method="POST" data-path="api/v1/brandColours" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-brandColours', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-brandColours" onclick="tryItOut('POSTapi-v1-brandColours');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-brandColours" onclick="cancelTryOut('POSTapi-v1-brandColours');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-brandColours" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/brandColours</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-brandColours" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-brandColours" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tenant_id" data-endpoint="POSTapi-v1-brandColours" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>red</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="red" data-endpoint="POSTapi-v1-brandColours" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>green</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="green" data-endpoint="POSTapi-v1-brandColours" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>blue</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="blue" data-endpoint="POSTapi-v1-brandColours" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>brandPrimaryColours</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The Brand Primary Colours details</summary>
<br>
<p>
<b><code>brandPrimaryColours.tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="brandPrimaryColours.tenant_id" data-endpoint="POSTapi-v1-brandColours" data-component="body" required  hidden>
<br>
The tenant's id</p>
<p>
<b><code>brandPrimaryColours.red</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="brandPrimaryColours.red" data-endpoint="POSTapi-v1-brandColours" data-component="body"  hidden>
<br>
The parameter for red color (max 255)</p>
<p>
<b><code>brandPrimaryColours.green</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="brandPrimaryColours.green" data-endpoint="POSTapi-v1-brandColours" data-component="body"  hidden>
<br>
The parameter for green color (max 255)</p>
<p>
<b><code>brandPrimaryColours.blue</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="brandPrimaryColours.blue" data-endpoint="POSTapi-v1-brandColours" data-component="body"  hidden>
<br>
The parameter for blue color (max 255)</p>
</details>
</p>

</form>


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/brandColours/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"red":2,"green":1,"blue":14}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/brandColours/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "red": 2,
    "green": 1,
    "blue": 14
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
    "message": "Updated The Brand Primary Colour.",
    "data": {
        "id": 1,
        "tenant_id": 1,
        "red": 10,
        "green": 232,
        "blue": 201,
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
  "red":["The red may not be greater than 255."],
  "green":["The green must be an integer."],
  "blue":["The blue must be an integer."],
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
    "message": "Failed The Brand Primary Colour Update.",
    "data": null
}
```
<div id="execution-results-PUTapi-v1-brandColours--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-brandColours--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-brandColours--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-brandColours--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-brandColours--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-brandColours--id-" data-method="PUT" data-path="api/v1/brandColours/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-brandColours--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-brandColours--id-" onclick="tryItOut('PUTapi-v1-brandColours--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-brandColours--id-" onclick="cancelTryOut('PUTapi-v1-brandColours--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-brandColours--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/brandColours/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-brandColours--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-brandColours--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-brandColours--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>red</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="red" data-endpoint="PUTapi-v1-brandColours--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>green</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="green" data-endpoint="PUTapi-v1-brandColours--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>blue</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="blue" data-endpoint="PUTapi-v1-brandColours--id-" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>brandPrimaryColours</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>
</summary>
<br>
<p>
<b><code>brandPrimaryColours.tenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="brandPrimaryColours.tenant_id" data-endpoint="PUTapi-v1-brandColours--id-" data-component="body"  hidden>
<br>
The tenant's id</p>
<p>
<b><code>brandPrimaryColours.red</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="brandPrimaryColours.red" data-endpoint="PUTapi-v1-brandColours--id-" data-component="body"  hidden>
<br>
The parameter for red color (max 255)</p>
<p>
<b><code>brandPrimaryColours.green</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="brandPrimaryColours.green" data-endpoint="PUTapi-v1-brandColours--id-" data-component="body"  hidden>
<br>
The parameter for green color (max 255)</p>
<p>
<b><code>brandPrimaryColours.blue</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="brandPrimaryColours.blue" data-endpoint="PUTapi-v1-brandColours--id-" data-component="body"  hidden>
<br>
The parameter for blue color (max 255)</p>
</details>
</p>

</form>


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/brandColours/rerum?id=17" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/brandColours/rerum"
);

let params = {
    "id": "17",
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
 "message": "Deleted The Brand Primary Colour.",
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
    "message": "Failed The Brand Primary Colour Delete.",
    "data": null
}
```
<div id="execution-results-DELETEapi-v1-brandColours--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-brandColours--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-brandColours--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-brandColours--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-brandColours--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-brandColours--id-" data-method="DELETE" data-path="api/v1/brandColours/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-brandColours--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-brandColours--id-" onclick="tryItOut('DELETEapi-v1-brandColours--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-brandColours--id-" onclick="cancelTryOut('DELETEapi-v1-brandColours--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-brandColours--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/brandColours/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-brandColours--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-brandColours--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-brandColours--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-v1-brandColours--id-" data-component="query"  hidden>
<br>
Brand Primary Colour ID</p>
</form>


## Change status of the specified Brand Primary Colour.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/brandColours/activate/officiis?id=14" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/brandColours/activate/officiis"
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
     "red": 10,
     "green": 232,
     "blue": 201,
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
    "message": "Failed The Brand Primary Colour Activation.",
    "data": null
}
```
<div id="execution-results-PUTapi-v1-brandColours-activate--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-brandColours-activate--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-brandColours-activate--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-brandColours-activate--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-brandColours-activate--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-brandColours-activate--id-" data-method="PUT" data-path="api/v1/brandColours/activate/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-brandColours-activate--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-brandColours-activate--id-" onclick="tryItOut('PUTapi-v1-brandColours-activate--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-brandColours-activate--id-" onclick="cancelTryOut('PUTapi-v1-brandColours-activate--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-brandColours-activate--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/brandColours/activate/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-brandColours-activate--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-brandColours-activate--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-brandColours-activate--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v1-brandColours-activate--id-" data-component="query"  hidden>
<br>
Brand Primary Colour ID</p>
</form>



