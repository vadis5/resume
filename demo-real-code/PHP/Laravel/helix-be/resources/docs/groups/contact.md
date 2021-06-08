# Contact

APIs for managing company contacts

## Display a listing of the resource for Admin group.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/contacts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/contacts"
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
    "message": "Contact Index",
    "data": [
        {
            "id": 1,
            "first_name": "Linda",
            "last_name": "Port",
            "email": "port@example.com",
            "email_verified": 1,
            "phone": "4458956587",
            "location": "United Kingdom",
            "job_title": "supervisor",
            "department_id": 12,
            "communication_type": "account",
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
<div id="execution-results-GETapi-v1-contacts" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-contacts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-contacts"></code></pre>
</div>
<div id="execution-error-GETapi-v1-contacts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-contacts"></code></pre>
</div>
<form id="form-GETapi-v1-contacts" data-method="GET" data-path="api/v1/contacts" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-contacts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-contacts" onclick="tryItOut('GETapi-v1-contacts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-contacts" onclick="cancelTryOut('GETapi-v1-contacts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-contacts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/contacts</code></b>
</p>
<p>
<label id="auth-GETapi-v1-contacts" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-contacts" data-component="header"></label>
</p>
</form>


## Display a listing of the resource by company Id.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/contacts/company/nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/contacts/company/nihil"
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
    "message": "Contact Index",
    "data": [
        {
            "id": 1,
            "first_name": "Linda",
            "last_name": "Port",
            "email": "port@example.com",
            "email_verified": 1,
            "phone": "4458956587",
            "location": "United Kingdom",
            "job_title": "supervisor",
            "department_id": 12,
            "communication_type": "account",
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
<div id="execution-results-GETapi-v1-contacts-company--company_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-contacts-company--company_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-contacts-company--company_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-contacts-company--company_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-contacts-company--company_id-"></code></pre>
</div>
<form id="form-GETapi-v1-contacts-company--company_id-" data-method="GET" data-path="api/v1/contacts/company/{company_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-contacts-company--company_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-contacts-company--company_id-" onclick="tryItOut('GETapi-v1-contacts-company--company_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-contacts-company--company_id-" onclick="cancelTryOut('GETapi-v1-contacts-company--company_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-contacts-company--company_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/contacts/company/{company_id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-contacts-company--company_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-contacts-company--company_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>company_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company_id" data-endpoint="GETapi-v1-contacts-company--company_id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/contacts/inventore?id=20" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/contacts/inventore"
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
    "message": "Got Specific Contact",
    "data": {
        "id": 4,
        "first_name": "Linda",
        "last_name": "Port",
        "email": "port@example.com",
        "email_verified": 1,
        "phone": "4458956587",
        "location": "United Kingdom",
        "job_title": "supervisor",
        "department_id": 12,
        "communication_type": "account",
        "created_at": "2020-11-03 00:00:00",
        "updated_at": "2020-11-03 00:00:00"
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
<div id="execution-results-GETapi-v1-contacts--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-contacts--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-contacts--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-contacts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-contacts--id-"></code></pre>
</div>
<form id="form-GETapi-v1-contacts--id-" data-method="GET" data-path="api/v1/contacts/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-contacts--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-contacts--id-" onclick="tryItOut('GETapi-v1-contacts--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-contacts--id-" onclick="cancelTryOut('GETapi-v1-contacts--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-contacts--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/contacts/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-contacts--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-contacts--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-contacts--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-contacts--id-" data-component="query"  hidden>
<br>
Contact ID</p>
</form>


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/contacts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"company_id":15,"first_name":"dolor","last_name":"quidem","email":"autem","email_verified":false,"phone":"amet","location":"et","job_title":"non","department_id":3,"communication_type":"reiciendis","contact":{"company_id":5,"first_name":"ea","last_name":"deserunt","email":"maiores","email_verified":false,"phone":"nemo","location":"sint","job_title":"omnis","department_id":2,"communication_type":"est"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/contacts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "company_id": 15,
    "first_name": "dolor",
    "last_name": "quidem",
    "email": "autem",
    "email_verified": false,
    "phone": "amet",
    "location": "et",
    "job_title": "non",
    "department_id": 3,
    "communication_type": "reiciendis",
    "contact": {
        "company_id": 5,
        "first_name": "ea",
        "last_name": "deserunt",
        "email": "maiores",
        "email_verified": false,
        "phone": "nemo",
        "location": "sint",
        "job_title": "omnis",
        "department_id": 2,
        "communication_type": "est"
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
 "message": "Created new Contact",
 "data": [
     "id":1,
     "first_name":"Linda",
     "last_name":"Port",
     "email":"port@example.com",
     "email_verified":1,
     "phone":"4458956587",
     "location":"United Kingdom",
     "job_title":"supervisor",
     "department_id":12,
     "communication_type":"account",
     "created_at":"2020-11-03 00:00:00",
     "updated_at":"2020-11-03 00:00:00"
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
        "first_name": [
            "The first_name field is required."
        ],
        "phone": [
            "The phone field must be a string."
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
<div id="execution-results-POSTapi-v1-contacts" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-contacts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-contacts"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-contacts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-contacts"></code></pre>
</div>
<form id="form-POSTapi-v1-contacts" data-method="POST" data-path="api/v1/contacts" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-contacts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-contacts" onclick="tryItOut('POSTapi-v1-contacts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-contacts" onclick="cancelTryOut('POSTapi-v1-contacts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-contacts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/contacts</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-contacts" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-contacts" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>company_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="company_id" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email_verified</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-v1-contacts" hidden><input type="radio" name="email_verified" value="true" data-endpoint="POSTapi-v1-contacts" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-v1-contacts" hidden><input type="radio" name="email_verified" value="false" data-endpoint="POSTapi-v1-contacts" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>location</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="location" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>job_title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="job_title" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="department_id" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>communication_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="communication_type" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>contact</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The contact details</summary>
<br>
<p>
<b><code>contact.company_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="contact.company_id" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
The company's id</p>
<p>
<b><code>contact.first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact.first_name" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
The First Name</p>
<p>
<b><code>contact.last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact.last_name" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
The Last Name</p>
<p>
<b><code>contact.email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact.email" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
The email of contact</p>
<p>
<b><code>contact.email_verified</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-v1-contacts" hidden><input type="radio" name="contact.email_verified" value="true" data-endpoint="POSTapi-v1-contacts" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-v1-contacts" hidden><input type="radio" name="contact.email_verified" value="false" data-endpoint="POSTapi-v1-contacts" data-component="body" required ><code>false</code></label>
<br>
Is email verified</p>
<p>
<b><code>contact.phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact.phone" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
The phone number</p>
<p>
<b><code>contact.location</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact.location" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
The country name</p>
<p>
<b><code>contact.job_title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact.job_title" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
The job title of the contact</p>
<p>
<b><code>contact.department_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="contact.department_id" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
Id of the department</p>
<p>
<b><code>contact.communication_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="contact.communication_type" data-endpoint="POSTapi-v1-contacts" data-component="body" required  hidden>
<br>
The Communication Type</p>
</details>
</p>

</form>


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/contacts/tempore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"quas","last_name":"accusantium","email":"eius","email_verified":false,"phone":"nostrum","location":"ut","job_title":"id","department_id":14,"communication_type":"aperiam","contact":{"first_name":"ullam","last_name":"dolore","email":"culpa","email_verified":"et","phone":"atque","location":"suscipit","job_title":"ab","department_id":4,"communication_type":"voluptas"}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/contacts/tempore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "quas",
    "last_name": "accusantium",
    "email": "eius",
    "email_verified": false,
    "phone": "nostrum",
    "location": "ut",
    "job_title": "id",
    "department_id": 14,
    "communication_type": "aperiam",
    "contact": {
        "first_name": "ullam",
        "last_name": "dolore",
        "email": "culpa",
        "email_verified": "et",
        "phone": "atque",
        "location": "suscipit",
        "job_title": "ab",
        "department_id": 4,
        "communication_type": "voluptas"
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
    "message": "Updated The Contact.",
    "data": {
        "id": 4,
        "first_name": "Linda",
        "last_name": "Port",
        "email": "port@example.com",
        "email_verified": 1,
        "phone": "4458956587",
        "location": "United Kingdom",
        "job_title": "supervisor",
        "department_id": 12,
        "communication_type": "account",
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
  "phone":["The phone field must be a string."]
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
<div id="execution-results-PUTapi-v1-contacts--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-contacts--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-contacts--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-contacts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-contacts--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-contacts--id-" data-method="PUT" data-path="api/v1/contacts/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-contacts--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-contacts--id-" onclick="tryItOut('PUTapi-v1-contacts--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-contacts--id-" onclick="cancelTryOut('PUTapi-v1-contacts--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-contacts--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/contacts/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-contacts--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-contacts--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-contacts--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email_verified</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-contacts--id-" hidden><input type="radio" name="email_verified" value="true" data-endpoint="PUTapi-v1-contacts--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-contacts--id-" hidden><input type="radio" name="email_verified" value="false" data-endpoint="PUTapi-v1-contacts--id-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>location</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="location" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>job_title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="job_title" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="department_id" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>communication_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="communication_type" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>contact</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The contact details</summary>
<br>
<p>
<b><code>contact.first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contact.first_name" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
The First Name</p>
<p>
<b><code>contact.last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contact.last_name" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
The Last Name</p>
<p>
<b><code>contact.email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contact.email" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
The email of contact</p>
<p>
<b><code>contact.email_verified</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="contact.email_verified" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
Is email verified</p>
<p>
<b><code>contact.phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contact.phone" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
The phone number</p>
<p>
<b><code>contact.location</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contact.location" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
The country name</p>
<p>
<b><code>contact.job_title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contact.job_title" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
The job title of the contact</p>
<p>
<b><code>contact.department_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="contact.department_id" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
Id of the department</p>
<p>
<b><code>contact.communication_type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contact.communication_type" data-endpoint="PUTapi-v1-contacts--id-" data-component="body"  hidden>
<br>
The Communication Type</p>
</details>
</p>

</form>


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/contacts/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/contacts/dolorem"
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
    "message": "Deleted The Contact.",
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
<div id="execution-results-DELETEapi-v1-contacts--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-contacts--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-contacts--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-contacts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-contacts--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-contacts--id-" data-method="DELETE" data-path="api/v1/contacts/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-contacts--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-contacts--id-" onclick="tryItOut('DELETEapi-v1-contacts--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-contacts--id-" onclick="cancelTryOut('DELETEapi-v1-contacts--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-contacts--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/contacts/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-contacts--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-contacts--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-contacts--id-" data-component="url" required  hidden>
<br>
</p>
</form>



