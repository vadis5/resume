# Categories

APIs for managing users

## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/mobile/v1/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/mobile/v1/categories"
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
    "message": "Created Category Index",
    "data": [
        {
            "id": 4,
            "name": "Category One",
            "department_id": 1,
            "parent_id": 4,
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
<div id="execution-results-GETapi-mobile-v1-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-mobile-v1-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mobile-v1-categories"></code></pre>
</div>
<div id="execution-error-GETapi-mobile-v1-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mobile-v1-categories"></code></pre>
</div>
<form id="form-GETapi-mobile-v1-categories" data-method="GET" data-path="api/mobile/v1/categories" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-mobile-v1-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-mobile-v1-categories" onclick="tryItOut('GETapi-mobile-v1-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-mobile-v1-categories" onclick="cancelTryOut('GETapi-mobile-v1-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-mobile-v1-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/mobile/v1/categories</code></b>
</p>
<p>
<label id="auth-GETapi-mobile-v1-categories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-mobile-v1-categories" data-component="header"></label>
</p>
</form>


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/categories"
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
    "message": "Created Category Index",
    "data": [
        {
            "id": 4,
            "name": "Category One",
            "department_id": 1,
            "parent_id": 4,
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
<div id="execution-results-GETapi-v1-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories"></code></pre>
</div>
<div id="execution-error-GETapi-v1-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories"></code></pre>
</div>
<form id="form-GETapi-v1-categories" data-method="GET" data-path="api/v1/categories" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-categories" onclick="tryItOut('GETapi-v1-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-categories" onclick="cancelTryOut('GETapi-v1-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/categories</code></b>
</p>
<p>
<label id="auth-GETapi-v1-categories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-categories" data-component="header"></label>
</p>
</form>


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/categories/helix" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/categories/helix"
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
    "message": "Created Category Index",
    "data": [
        {
            "id": 4,
            "name": "Category One",
            "department_id": 1,
            "parent_id": 4,
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
<div id="execution-results-GETapi-v1-categories-helix" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-categories-helix"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories-helix"></code></pre>
</div>
<div id="execution-error-GETapi-v1-categories-helix" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories-helix"></code></pre>
</div>
<form id="form-GETapi-v1-categories-helix" data-method="GET" data-path="api/v1/categories/helix" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories-helix', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-categories-helix" onclick="tryItOut('GETapi-v1-categories-helix');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-categories-helix" onclick="cancelTryOut('GETapi-v1-categories-helix');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-categories-helix" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/categories/helix</code></b>
</p>
<p>
<label id="auth-GETapi-v1-categories-helix" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-categories-helix" data-component="header"></label>
</p>
</form>


## Display a listing of the resource selected for a company.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/categories/department/laudantium?id=17" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/categories/department/laudantium"
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
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Created Category Index",
    "data": [
        {
            "id": 4,
            "name": "Category One",
            "department_id": 1,
            "parent_id": 4,
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
<div id="execution-results-GETapi-v1-categories-department--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-categories-department--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories-department--department_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-categories-department--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories-department--department_id-"></code></pre>
</div>
<form id="form-GETapi-v1-categories-department--department_id-" data-method="GET" data-path="api/v1/categories/department/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories-department--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-categories-department--department_id-" onclick="tryItOut('GETapi-v1-categories-department--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-categories-department--department_id-" onclick="cancelTryOut('GETapi-v1-categories-department--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-categories-department--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/categories/department/{department_id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-categories-department--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-categories-department--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="GETapi-v1-categories-department--department_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-categories-department--department_id-" data-component="query"  hidden>
<br>
Category ID</p>
</form>


## Display a listing of the resource selected for a company.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/categories/tenant/saepe?id=10" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/categories/tenant/saepe"
);

let params = {
    "id": "10",
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
    "message": "Created Category Index",
    "data": [
        {
            "id": 4,
            "name": "Category One",
            "department_id": 1,
            "parent_id": 4,
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
<div id="execution-results-GETapi-v1-categories-tenant--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-categories-tenant--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories-tenant--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-categories-tenant--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories-tenant--id-"></code></pre>
</div>
<form id="form-GETapi-v1-categories-tenant--id-" data-method="GET" data-path="api/v1/categories/tenant/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories-tenant--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-categories-tenant--id-" onclick="tryItOut('GETapi-v1-categories-tenant--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-categories-tenant--id-" onclick="cancelTryOut('GETapi-v1-categories-tenant--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-categories-tenant--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/categories/tenant/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-categories-tenant--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-categories-tenant--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-categories-tenant--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-categories-tenant--id-" data-component="query"  hidden>
<br>
Category ID</p>
</form>


## Get selected three categories.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/categories/selected" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/categories/selected"
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
    "message": "UserCategories are created",
    "data": [
        {
            "id": 4,
            "user_id": 1,
            "category_id": 4,
            "created_at": "2020-11-03 00:00:00",
            "updated_at": "2020-11-03 00:00:00"
        }
    ]
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
<div id="execution-results-GETapi-v1-categories-selected" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-categories-selected"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories-selected"></code></pre>
</div>
<div id="execution-error-GETapi-v1-categories-selected" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories-selected"></code></pre>
</div>
<form id="form-GETapi-v1-categories-selected" data-method="GET" data-path="api/v1/categories/selected" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories-selected', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-categories-selected" onclick="tryItOut('GETapi-v1-categories-selected');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-categories-selected" onclick="cancelTryOut('GETapi-v1-categories-selected');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-categories-selected" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/categories/selected</code></b>
</p>
<p>
<label id="auth-GETapi-v1-categories-selected" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-categories-selected" data-component="header"></label>
</p>
</form>


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/categories/voluptas?id=17" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/categories/voluptas"
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
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Got Specific Category",
    "data": {
        "id": 4,
        "name": "Category One",
        "department_id": 1,
        "parent_id": 1,
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
<div id="execution-results-GETapi-v1-categories--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-categories--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories--id-"></code></pre>
</div>
<form id="form-GETapi-v1-categories--id-" data-method="GET" data-path="api/v1/categories/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-categories--id-" onclick="tryItOut('GETapi-v1-categories--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-categories--id-" onclick="cancelTryOut('GETapi-v1-categories--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-categories--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/categories/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-categories--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-categories--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-categories--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-categories--id-" data-component="query"  hidden>
<br>
Category ID</p>
</form>


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"eligendi","department_id":6,"parent_id":8,"category":{"name":"quaerat","department_id":12,"parent_id":15}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "eligendi",
    "department_id": 6,
    "parent_id": 8,
    "category": {
        "name": "quaerat",
        "department_id": 12,
        "parent_id": 15
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
 "message": "Created New Category",
 "data": [
    "id": 4,
    "name": "Category One",
    "department_id": 1,
    "parent_id": 4,
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00"
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
        "department_id": [
            "The department_id field is required."
        ],
        "parent_id": [
            "The parent_id field must be an integer."
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
<div id="execution-results-POSTapi-v1-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-categories"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-categories"></code></pre>
</div>
<form id="form-POSTapi-v1-categories" data-method="POST" data-path="api/v1/categories" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-categories" onclick="tryItOut('POSTapi-v1-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-categories" onclick="cancelTryOut('POSTapi-v1-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/categories</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-categories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-categories" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-categories" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="department_id" data-endpoint="POSTapi-v1-categories" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="parent_id" data-endpoint="POSTapi-v1-categories" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>category</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The category details</summary>
<br>
<p>
<b><code>category.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category.name" data-endpoint="POSTapi-v1-categories" data-component="body" required  hidden>
<br>
The category's name</p>
<p>
<b><code>category.department_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category.department_id" data-endpoint="POSTapi-v1-categories" data-component="body" required  hidden>
<br>
The department's Id</p>
<p>
<b><code>category.parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="category.parent_id" data-endpoint="POSTapi-v1-categories" data-component="body"  hidden>
<br>
The parent category Id</p>
</details>
</p>

</form>


## Store a newly selected three categories in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/categories/store-selected" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_ids":[2,9],"user_category":{"user_id":3,"category_id":5}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/categories/store-selected"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_ids": [
        2,
        9
    ],
    "user_category": {
        "user_id": 3,
        "category_id": 5
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
    "message": "UserCategories are created",
    "data": null
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "user_id": [
            "The user_id field is required."
        ],
        "category_id": [
            "The category_id field must be an integer."
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
<div id="execution-results-POSTapi-v1-categories-store-selected" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-categories-store-selected"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-categories-store-selected"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-categories-store-selected" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-categories-store-selected"></code></pre>
</div>
<form id="form-POSTapi-v1-categories-store-selected" data-method="POST" data-path="api/v1/categories/store-selected" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-categories-store-selected', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-categories-store-selected" onclick="tryItOut('POSTapi-v1-categories-store-selected');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-categories-store-selected" onclick="cancelTryOut('POSTapi-v1-categories-store-selected');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-categories-store-selected" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/categories/store-selected</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-categories-store-selected" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-categories-store-selected" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_ids</code></b>&nbsp;&nbsp;<small>integer[]</small>  &nbsp;
<input type="number" name="category_ids.0" data-endpoint="POSTapi-v1-categories-store-selected" data-component="body" required  hidden>
<input type="number" name="category_ids.1" data-endpoint="POSTapi-v1-categories-store-selected" data-component="body" hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>user_category</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The user_category details</summary>
<br>
<p>
<b><code>user_category.user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_category.user_id" data-endpoint="POSTapi-v1-categories-store-selected" data-component="body" required  hidden>
<br>
The user's Id</p>
<p>
<b><code>user_category.category_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_category.category_id" data-endpoint="POSTapi-v1-categories-store-selected" data-component="body"  hidden>
<br>
The category's Id</p>
</details>
</p>

</form>


## Update the selected categories.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/categories/update-selected" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"category_ids":[20,13],"user_category":{"user_id":1,"category_id":10}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/categories/update-selected"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_ids": [
        20,
        13
    ],
    "user_category": {
        "user_id": 1,
        "category_id": 10
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
    "message": "Categories Selected are updated",
    "data": null
}
```
> Example response (422):

```json

{
 "message":"The given data was invalid.",
 "errors": {
  "user_id":["The user_id field is required."],
  "category_id":["The category_id field must be an integer."]
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
<div id="execution-results-PUTapi-v1-categories-update-selected" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-categories-update-selected"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-categories-update-selected"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-categories-update-selected" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-categories-update-selected"></code></pre>
</div>
<form id="form-PUTapi-v1-categories-update-selected" data-method="PUT" data-path="api/v1/categories/update-selected" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-categories-update-selected', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-categories-update-selected" onclick="tryItOut('PUTapi-v1-categories-update-selected');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-categories-update-selected" onclick="cancelTryOut('PUTapi-v1-categories-update-selected');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-categories-update-selected" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/categories/update-selected</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-categories-update-selected" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-categories-update-selected" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>category_ids</code></b>&nbsp;&nbsp;<small>integer[]</small>  &nbsp;
<input type="number" name="category_ids.0" data-endpoint="PUTapi-v1-categories-update-selected" data-component="body" required  hidden>
<input type="number" name="category_ids.1" data-endpoint="PUTapi-v1-categories-update-selected" data-component="body" hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>user_category</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The user_category details</summary>
<br>
<p>
<b><code>user_category.user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_category.user_id" data-endpoint="PUTapi-v1-categories-update-selected" data-component="body" required  hidden>
<br>
The user's Id</p>
<p>
<b><code>user_category.category_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_category.category_id" data-endpoint="PUTapi-v1-categories-update-selected" data-component="body"  hidden>
<br>
The category's Id</p>
</details>
</p>

</form>


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/categories/harum?id=9" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"voluptatibus","department_id":6,"parent_id":6,"category":{"name":"natus","department_id":19,"parent_id":8}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/categories/harum"
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

let body = {
    "name": "voluptatibus",
    "department_id": 6,
    "parent_id": 6,
    "category": {
        "name": "natus",
        "department_id": 19,
        "parent_id": 8
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
    "message": "Updated Category",
    "data": {
        "id": 4,
        "name": "Category One",
        "department_id": 1,
        "parent_id": 1,
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
  "department_id":["The department_id field is required."],
  "parent_id":["The parent_id field must be an integer."]
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
<div id="execution-results-PUTapi-v1-categories--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-categories--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-categories--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-categories--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-categories--id-" data-method="PUT" data-path="api/v1/categories/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-categories--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-categories--id-" onclick="tryItOut('PUTapi-v1-categories--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-categories--id-" onclick="cancelTryOut('PUTapi-v1-categories--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-categories--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/categories/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-categories--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-categories--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-categories--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v1-categories--id-" data-component="query"  hidden>
<br>
Category Id</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-categories--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="department_id" data-endpoint="PUTapi-v1-categories--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="parent_id" data-endpoint="PUTapi-v1-categories--id-" data-component="body"  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>category</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The category details</summary>
<br>
<p>
<b><code>category.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category.name" data-endpoint="PUTapi-v1-categories--id-" data-component="body" required  hidden>
<br>
The category's name</p>
<p>
<b><code>category.department_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category.department_id" data-endpoint="PUTapi-v1-categories--id-" data-component="body" required  hidden>
<br>
The department's Id</p>
<p>
<b><code>category.parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="category.parent_id" data-endpoint="PUTapi-v1-categories--id-" data-component="body"  hidden>
<br>
The parent category Id</p>
</details>
</p>

</form>


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/categories/eaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/categories/eaque"
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
 "message": "Deleted The Category.",
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
<div id="execution-results-DELETEapi-v1-categories--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-categories--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-categories--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-categories--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-categories--id-" data-method="DELETE" data-path="api/v1/categories/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-categories--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-categories--id-" onclick="tryItOut('DELETEapi-v1-categories--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-categories--id-" onclick="cancelTryOut('DELETEapi-v1-categories--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-categories--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/categories/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-categories--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-categories--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-categories--id-" data-component="url" required  hidden>
<br>
</p>
</form>



