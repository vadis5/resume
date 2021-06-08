# Companies

APIs for managing users

## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/companies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/companies"
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
    "message": "Created Company Index",
    "data": [
        {
            "id": 4,
            "name": "Company One",
            "company_number": "123456789",
            "seats": 458,
            "logo": "",
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
<div id="execution-results-GETapi-v1-companies" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-companies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-companies"></code></pre>
</div>
<div id="execution-error-GETapi-v1-companies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-companies"></code></pre>
</div>
<form id="form-GETapi-v1-companies" data-method="GET" data-path="api/v1/companies" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-companies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-companies" onclick="tryItOut('GETapi-v1-companies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-companies" onclick="cancelTryOut('GETapi-v1-companies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-companies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/companies</code></b>
</p>
<p>
<label id="auth-GETapi-v1-companies" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-companies" data-component="header"></label>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/companies/quia?id=20" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/companies/quia"
);

let params = {
    "id": "20",
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
    "message": "Got Specific Company",
    "data": {
        "id": 4,
        "name": "Company One",
        "company_number": "123456789",
        "seats": 145,
        "logo": "",
        "created_at": "2020-11-03 00:00:00",
        "updated_at": null
    }
}
```
> Example response (460):

```json
{
    "success": false,
    "code": 460,
    "message": "Wrong request",
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
<div id="execution-results-GETapi-v1-companies--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-companies--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-companies--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-companies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-companies--id-"></code></pre>
</div>
<form id="form-GETapi-v1-companies--id-" data-method="GET" data-path="api/v1/companies/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-companies--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-companies--id-" onclick="tryItOut('GETapi-v1-companies--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-companies--id-" onclick="cancelTryOut('GETapi-v1-companies--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-companies--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/companies/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-companies--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-companies--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-companies--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-companies--id-" data-component="query"  hidden>
<br>
Company ID</p>
</form>


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/companies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aut","company_number":"et","seats":15,"logo":"consequatur","company":{"name":"adipisci","company_number":"rerum","seats":20,"logo":"non"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/companies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aut",
    "company_number": "et",
    "seats": 15,
    "logo": "consequatur",
    "company": {
        "name": "adipisci",
        "company_number": "rerum",
        "seats": 20,
        "logo": "non"
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
 "message": "Created New Company",
 "data": [
    "id": 4,
    "name": "Company One",
    "company_number": "123456789",
    "seats": 145,
    "logo": "",
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
        "company_number": [
            "The company_number field is required."
        ],
        "seats": [
            "The seats field is required."
        ],
        "logo": [
            "The logo field must be a string."
        ]
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
<div id="execution-results-POSTapi-v1-companies" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-companies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-companies"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-companies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-companies"></code></pre>
</div>
<form id="form-POSTapi-v1-companies" data-method="POST" data-path="api/v1/companies" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-companies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-companies" onclick="tryItOut('POSTapi-v1-companies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-companies" onclick="cancelTryOut('POSTapi-v1-companies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-companies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/companies</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-companies" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-companies" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-companies" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>company_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company_number" data-endpoint="POSTapi-v1-companies" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>seats</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="seats" data-endpoint="POSTapi-v1-companies" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>logo</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="logo" data-endpoint="POSTapi-v1-companies" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>company</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The company details</summary>
<br>
<p>
<b><code>company.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company.name" data-endpoint="POSTapi-v1-companies" data-component="body" required  hidden>
<br>
The company's name</p>
<p>
<b><code>company.company_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company.company_number" data-endpoint="POSTapi-v1-companies" data-component="body" required  hidden>
<br>
The company's company
            number</p>
<p>
<b><code>company.seats</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="company.seats" data-endpoint="POSTapi-v1-companies" data-component="body" required  hidden>
<br>
The company's total seats</p>
<p>
<b><code>company.logo</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="company.logo" data-endpoint="POSTapi-v1-companies" data-component="body"  hidden>
<br>
The name of the company's logo</p>
</details>
</p>

</form>


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/companies/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"voluptatem","company_number":"similique","seats":17,"logo":"est","company":{"name":"iusto","company_number":"libero","seats":3,"logo":"dolorem"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/companies/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "voluptatem",
    "company_number": "similique",
    "seats": 17,
    "logo": "est",
    "company": {
        "name": "iusto",
        "company_number": "libero",
        "seats": 3,
        "logo": "dolorem"
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
    "message": "Updated New User",
    "data": {
        "id": 4,
        "name": "Company One",
        "company_number": "123456789",
        "seats": 145,
        "logo": "",
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
  "name":["The name field is required."],
  "company_number":["The company_number field is required."],
  "seats":["The seats field is required."],
  "logo":["The logo field must be a string."]
 }
}

* @response   460 {
 "success": false,
 "code": 460,
 "message": "Wrong request",
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
<div id="execution-results-PUTapi-v1-companies--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-companies--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-companies--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-companies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-companies--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-companies--id-" data-method="PUT" data-path="api/v1/companies/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-companies--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-companies--id-" onclick="tryItOut('PUTapi-v1-companies--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-companies--id-" onclick="cancelTryOut('PUTapi-v1-companies--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-companies--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/companies/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-companies--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-companies--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-companies--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-companies--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>company_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="company_number" data-endpoint="PUTapi-v1-companies--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>seats</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="seats" data-endpoint="PUTapi-v1-companies--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>logo</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="logo" data-endpoint="PUTapi-v1-companies--id-" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>company</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The company details</summary>
<br>
<p>
<b><code>company.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company.name" data-endpoint="PUTapi-v1-companies--id-" data-component="body" required  hidden>
<br>
The company's name</p>
<p>
<b><code>company.company_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company.company_number" data-endpoint="PUTapi-v1-companies--id-" data-component="body" required  hidden>
<br>
The company's company
            number</p>
<p>
<b><code>company.seats</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="company.seats" data-endpoint="PUTapi-v1-companies--id-" data-component="body" required  hidden>
<br>
The company's total seats</p>
<p>
<b><code>company.logo</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="company.logo" data-endpoint="PUTapi-v1-companies--id-" data-component="body"  hidden>
<br>
The name of the company's logo</p>
</details>
</p>

</form>


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/companies/alias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/companies/alias"
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
 "message": "Deleted The Company.",
 "data": null
}

* @response   460 {
 "success": false,
 "code": 460,
 "message": "Wrong request",
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
<div id="execution-results-DELETEapi-v1-companies--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-companies--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-companies--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-companies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-companies--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-companies--id-" data-method="DELETE" data-path="api/v1/companies/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-companies--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-companies--id-" onclick="tryItOut('DELETEapi-v1-companies--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-companies--id-" onclick="cancelTryOut('DELETEapi-v1-companies--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-companies--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/companies/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-companies--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-companies--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-companies--id-" data-component="url" required  hidden>
<br>
</p>
</form>



