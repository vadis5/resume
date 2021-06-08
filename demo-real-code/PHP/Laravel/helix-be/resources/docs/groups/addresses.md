# Addresses

APIs for managing company addresses

## Display a listing of the resource for Admin group.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/addresses"
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
    "message": "Address Index",
    "data": [
        {
            "id": 1,
            "address_line_1": "1 York Road",
            "address_line_2": "9623 Church Lane",
            "city": "LONDON",
            "country": "United kingdom",
            "postcode": "NW17 2LG",
            "primary": 1,
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
<div id="execution-results-GETapi-v1-addresses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-addresses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-addresses"></code></pre>
</div>
<div id="execution-error-GETapi-v1-addresses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-addresses"></code></pre>
</div>
<form id="form-GETapi-v1-addresses" data-method="GET" data-path="api/v1/addresses" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-addresses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-addresses" onclick="tryItOut('GETapi-v1-addresses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-addresses" onclick="cancelTryOut('GETapi-v1-addresses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-addresses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/addresses</code></b>
</p>
<p>
<label id="auth-GETapi-v1-addresses" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-addresses" data-component="header"></label>
</p>
</form>


## Display a listing of the resource by company Id.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/addresses/company/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/addresses/company/rerum"
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
    "message": "Address Index",
    "data": [
        {
            "id": 1,
            "address_line_1": "1 York Road",
            "address_line_2": "9623 Church Lane",
            "city": "LONDON",
            "country": "United kingdom",
            "postcode": "NW17 2LG",
            "primary": 1,
            "created_at": "2020-11-03 00:00:00",
            "updated_at": "2020-11-03 00:00:00"
        }
    ]
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
<div id="execution-results-GETapi-v1-addresses-company--company_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-addresses-company--company_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-addresses-company--company_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-addresses-company--company_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-addresses-company--company_id-"></code></pre>
</div>
<form id="form-GETapi-v1-addresses-company--company_id-" data-method="GET" data-path="api/v1/addresses/company/{company_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-addresses-company--company_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-addresses-company--company_id-" onclick="tryItOut('GETapi-v1-addresses-company--company_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-addresses-company--company_id-" onclick="cancelTryOut('GETapi-v1-addresses-company--company_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-addresses-company--company_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/addresses/company/{company_id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-addresses-company--company_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-addresses-company--company_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>company_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company_id" data-endpoint="GETapi-v1-addresses-company--company_id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/addresses/delectus?id=6" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/addresses/delectus"
);

let params = {
    "id": "6",
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
 "message": "Got Specific Address",
 "data": {
    "id": 4,
    "company_id" => 1,
    "address_line_1" => '88 West Street',
    "address_line_2" => null,
    "city" => 'LEICESTER',
    "country" => 'United kingdom',
    "postcode" => 'LE4 7EN',
    "primary" => true
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
<div id="execution-results-GETapi-v1-addresses--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-addresses--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-addresses--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-addresses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-addresses--id-"></code></pre>
</div>
<form id="form-GETapi-v1-addresses--id-" data-method="GET" data-path="api/v1/addresses/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-addresses--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-addresses--id-" onclick="tryItOut('GETapi-v1-addresses--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-addresses--id-" onclick="cancelTryOut('GETapi-v1-addresses--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-addresses--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/addresses/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-addresses--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-addresses--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-addresses--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-addresses--id-" data-component="query"  hidden>
<br>
Address ID</p>
</form>


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/addresses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"company_id":10,"address_line_1":"praesentium","address_line_2":"eveniet","city":"in","country":"repellat","postcode":"accusamus","primary":false,"address":{"company_id":3,"address_line_1":"sapiente","address_line_2":"adipisci","city":"sed","country":"ea","postcode":"nisi","primary":false}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/addresses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "company_id": 10,
    "address_line_1": "praesentium",
    "address_line_2": "eveniet",
    "city": "in",
    "country": "repellat",
    "postcode": "accusamus",
    "primary": false,
    "address": {
        "company_id": 3,
        "address_line_1": "sapiente",
        "address_line_2": "adipisci",
        "city": "sed",
        "country": "ea",
        "postcode": "nisi",
        "primary": false
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
 "message": "Created new Address",
 "data": [
    "id": 4,
    "company_id" => 1,
    "address_line_1" => '88 West Street',
    "address_line_2" => null,
    "city" => 'LEICESTER',
    "country" => 'United kingdom',
    "postcode" => 'LE4 7EN',
    "primary" => true
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
        "company_id": [
            "The company_id field is required."
        ],
        "address_line_1": [
            "The address_line_1 field is required."
        ],
        "postcode": [
            "The postcode field must be a string."
        ]
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
<div id="execution-results-POSTapi-v1-addresses" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-addresses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-addresses"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-addresses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-addresses"></code></pre>
</div>
<form id="form-POSTapi-v1-addresses" data-method="POST" data-path="api/v1/addresses" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-addresses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-addresses" onclick="tryItOut('POSTapi-v1-addresses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-addresses" onclick="cancelTryOut('POSTapi-v1-addresses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-addresses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/addresses</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-addresses" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-addresses" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>company_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="company_id" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address_line_1</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address_line_1" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address_line_2</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address_line_2" data-endpoint="POSTapi-v1-addresses" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>country</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="country" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>postcode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="postcode" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>primary</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-v1-addresses" hidden><input type="radio" name="primary" value="true" data-endpoint="POSTapi-v1-addresses" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-v1-addresses" hidden><input type="radio" name="primary" value="false" data-endpoint="POSTapi-v1-addresses" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<details>
<summary>
<b><code>address</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The address details</summary>
<br>
<p>
<b><code>address.company_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="address.company_id" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
The company's id</p>
<p>
<b><code>address.address_line_1</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.address_line_1" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
The address line #1</p>
<p>
<b><code>address.address_line_2</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address.address_line_2" data-endpoint="POSTapi-v1-addresses" data-component="body"  hidden>
<br>
The address line #2</p>
<p>
<b><code>address.city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.city" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
The name of the city</p>
<p>
<b><code>address.country</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.country" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
The name of the country</p>
<p>
<b><code>address.postcode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.postcode" data-endpoint="POSTapi-v1-addresses" data-component="body" required  hidden>
<br>
The postcode</p>
<p>
<b><code>address.primary</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-v1-addresses" hidden><input type="radio" name="address.primary" value="true" data-endpoint="POSTapi-v1-addresses" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-v1-addresses" hidden><input type="radio" name="address.primary" value="false" data-endpoint="POSTapi-v1-addresses" data-component="body" required ><code>false</code></label>
<br>
Primary address or not</p>
</details>
</p>

</form>


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/addresses/quasi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"address_line_1":"dolores","address_line_2":"tempore","city":"enim","country":"dolores","postcode":"perspiciatis","primary":false,"address":{"address_line_1":"laudantium","address_line_2":"vel","city":"omnis","country":"qui","postcode":"quia","primary":true}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/addresses/quasi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "address_line_1": "dolores",
    "address_line_2": "tempore",
    "city": "enim",
    "country": "dolores",
    "postcode": "perspiciatis",
    "primary": false,
    "address": {
        "address_line_1": "laudantium",
        "address_line_2": "vel",
        "city": "omnis",
        "country": "qui",
        "postcode": "quia",
        "primary": true
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
 "message": "Updated The Address.",
 "data": {
    "id": 4,
    "company_id" => 1,
    "address_line_1" => '88 West Street',
    "address_line_2" => null,
    "city" => 'LEICESTER',
    "country" => 'United kingdom',
    "postcode" => 'LE4 7EN',
    "primary" => true
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
  "postcode":["The postcode field must be a string."]
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
<div id="execution-results-PUTapi-v1-addresses--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-addresses--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-addresses--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-addresses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-addresses--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-addresses--id-" data-method="PUT" data-path="api/v1/addresses/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-addresses--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-addresses--id-" onclick="tryItOut('PUTapi-v1-addresses--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-addresses--id-" onclick="cancelTryOut('PUTapi-v1-addresses--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-addresses--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/addresses/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-addresses--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-addresses--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-addresses--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>address_line_1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address_line_1" data-endpoint="PUTapi-v1-addresses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>address_line_2</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address_line_2" data-endpoint="PUTapi-v1-addresses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="city" data-endpoint="PUTapi-v1-addresses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>country</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="country" data-endpoint="PUTapi-v1-addresses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>postcode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="postcode" data-endpoint="PUTapi-v1-addresses--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>primary</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-addresses--id-" hidden><input type="radio" name="primary" value="true" data-endpoint="PUTapi-v1-addresses--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-addresses--id-" hidden><input type="radio" name="primary" value="false" data-endpoint="PUTapi-v1-addresses--id-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<details>
<summary>
<b><code>address</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The address details</summary>
<br>
<p>
<b><code>address.address_line_1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address.address_line_1" data-endpoint="PUTapi-v1-addresses--id-" data-component="body"  hidden>
<br>
The address line #1</p>
<p>
<b><code>address.address_line_2</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address.address_line_2" data-endpoint="PUTapi-v1-addresses--id-" data-component="body"  hidden>
<br>
The address line #2</p>
<p>
<b><code>address.city</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address.city" data-endpoint="PUTapi-v1-addresses--id-" data-component="body"  hidden>
<br>
The name of the city</p>
<p>
<b><code>address.country</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address.country" data-endpoint="PUTapi-v1-addresses--id-" data-component="body"  hidden>
<br>
The name of the country</p>
<p>
<b><code>address.postcode</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address.postcode" data-endpoint="PUTapi-v1-addresses--id-" data-component="body"  hidden>
<br>
The postcode</p>
<p>
<b><code>address.primary</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-addresses--id-" hidden><input type="radio" name="address.primary" value="true" data-endpoint="PUTapi-v1-addresses--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-addresses--id-" hidden><input type="radio" name="address.primary" value="false" data-endpoint="PUTapi-v1-addresses--id-" data-component="body" ><code>false</code></label>
<br>
Primary address or not</p>
</details>
</p>

</form>


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/addresses/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/addresses/vel"
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
    "message": "Deleted The Address.",
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
<div id="execution-results-DELETEapi-v1-addresses--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-addresses--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-addresses--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-addresses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-addresses--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-addresses--id-" data-method="DELETE" data-path="api/v1/addresses/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-addresses--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-addresses--id-" onclick="tryItOut('DELETEapi-v1-addresses--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-addresses--id-" onclick="cancelTryOut('DELETEapi-v1-addresses--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-addresses--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/addresses/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-addresses--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-addresses--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-addresses--id-" data-component="url" required  hidden>
<br>
</p>
</form>



