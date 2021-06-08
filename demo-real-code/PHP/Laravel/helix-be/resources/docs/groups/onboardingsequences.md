# OnboardingSequences

APIs for managing Onboarding Sequences

## Display the specified onboarding sequence by department id (for mobile application)

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/onboarding/departments/optio?department_id=16" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/onboarding/departments/optio"
);

let params = {
    "department_id": "16",
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
 "message": "Got Specific Onboarding Sequence By Department ID.",
 "data": {
    "id": 4,
    "department_id": 1,
    "receive_reward": true,
    "created_at": "2020-11-03 00:00:00",
    "updated_at": "2020-11-03 00:00:00"
    "onboarding_screens": [
        {
           'id' => 1,
           'department_id' => 1,
           'order' => 1,
           'title' => 'Test Title',
           'heading' => 'New Test Title',
           'description' => 'test',
           'button' => 'Click',
           'created_at' => "2020-11-03 00:00:00",
           'updated_at' => "2020-11-03 00:00:00",
           'widget' => [
              'id' => 1,
              'widget_type_id' => 1,
              'screen_id' => 1,
              'title' => 'New Video Course',
              'description' => 'Video about course',
              'default' => 0,
              'file' => 'onboardingWidgets/video/video.mp4',
              'html_code' => null,
              'created_at' => "2020-11-03 00:00:00",
              'updated_at' => "2020-11-03 00:00:00",
              'widget_type' => [
                 'id' => 1,
                 'type' => 'video',
                 'created_at' => "2020-11-03 00:00:00",
                 'updated_at' => "2020-11-03 00:00:00",
              ],
           ]
        }
     ]
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
<div id="execution-results-GETapi-v1-onboarding-departments--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-onboarding-departments--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-onboarding-departments--department_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-onboarding-departments--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-onboarding-departments--department_id-"></code></pre>
</div>
<form id="form-GETapi-v1-onboarding-departments--department_id-" data-method="GET" data-path="api/v1/onboarding/departments/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-onboarding-departments--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-onboarding-departments--department_id-" onclick="tryItOut('GETapi-v1-onboarding-departments--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-onboarding-departments--department_id-" onclick="cancelTryOut('GETapi-v1-onboarding-departments--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-onboarding-departments--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/onboarding/departments/{department_id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-onboarding-departments--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-onboarding-departments--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="GETapi-v1-onboarding-departments--department_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="department_id" data-endpoint="GETapi-v1-onboarding-departments--department_id-" data-component="query"  hidden>
<br>
Department ID</p>
</form>


## Display the specified onboarding sequence.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/v1/onboardingSequences/departments/ab?department_id=8" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/onboardingSequences/departments/ab"
);

let params = {
    "department_id": "8",
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
    "message": "Got Specific Onboarding Sequence.",
    "data": {
        "id": 4,
        "department_id": 1,
        "receive_reward": true,
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
<div id="execution-results-GETapi-v1-onboardingSequences-departments--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-onboardingSequences-departments--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-onboardingSequences-departments--department_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-onboardingSequences-departments--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-onboardingSequences-departments--department_id-"></code></pre>
</div>
<form id="form-GETapi-v1-onboardingSequences-departments--department_id-" data-method="GET" data-path="api/v1/onboardingSequences/departments/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-onboardingSequences-departments--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-onboardingSequences-departments--department_id-" onclick="tryItOut('GETapi-v1-onboardingSequences-departments--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-onboardingSequences-departments--department_id-" onclick="cancelTryOut('GETapi-v1-onboardingSequences-departments--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-onboardingSequences-departments--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/onboardingSequences/departments/{department_id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-onboardingSequences-departments--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-onboardingSequences-departments--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="GETapi-v1-onboardingSequences-departments--department_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="department_id" data-endpoint="GETapi-v1-onboardingSequences-departments--department_id-" data-component="query"  hidden>
<br>
Department ID</p>
</form>


## Store a newly created Onboarding Sequence

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://helix4.com/api/v1/onboardingSequences" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"department_id":2,"onboardingSequence":{"department_id":8}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/onboardingSequences"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "department_id": 2,
    "onboardingSequence": {
        "department_id": 8
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
 "message": "Created new Onboarding Sequence.",
 "data": [
    "id": 4,
    "department_id": 1,
    "receive_reward": true,
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
        "department_id": [
            "The department id should be unique."
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
<div id="execution-results-POSTapi-v1-onboardingSequences" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-onboardingSequences"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-onboardingSequences"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-onboardingSequences" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-onboardingSequences"></code></pre>
</div>
<form id="form-POSTapi-v1-onboardingSequences" data-method="POST" data-path="api/v1/onboardingSequences" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-onboardingSequences', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-onboardingSequences" onclick="tryItOut('POSTapi-v1-onboardingSequences');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-onboardingSequences" onclick="cancelTryOut('POSTapi-v1-onboardingSequences');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-onboardingSequences" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/onboardingSequences</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-onboardingSequences" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-onboardingSequences" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="department_id" data-endpoint="POSTapi-v1-onboardingSequences" data-component="body" required  hidden>
<br>
</p>
<p>
<details>
<summary>
<b><code>onboardingSequence</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The onboarding sequence object</summary>
<br>
<p>
<b><code>onboardingSequence.department_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="onboardingSequence.department_id" data-endpoint="POSTapi-v1-onboardingSequences" data-component="body" required  hidden>
<br>
The department_id parameter
of the onboarding sequence</p>
</details>
</p>

</form>


## Update the specified Onboarding Sequence

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://helix4.com/api/v1/onboardingSequences/departments/nihil?department_id=8" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"receive_reward":false,"onboardingSequence":{"receive_reward":false}}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/onboardingSequences/departments/nihil"
);

let params = {
    "department_id": "8",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "receive_reward": false,
    "onboardingSequence": {
        "receive_reward": false
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
 "message": "Updated The Onboarding Sequence.",
 "data": [
    "id": 4,
    "department_id": 1,
    "receive_reward": true,
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
        "receive_reward": [
            "The receive reward field must be a bool."
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
<div id="execution-results-PUTapi-v1-onboardingSequences-departments--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-onboardingSequences-departments--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-onboardingSequences-departments--department_id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-onboardingSequences-departments--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-onboardingSequences-departments--department_id-"></code></pre>
</div>
<form id="form-PUTapi-v1-onboardingSequences-departments--department_id-" data-method="PUT" data-path="api/v1/onboardingSequences/departments/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-onboardingSequences-departments--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-onboardingSequences-departments--department_id-" onclick="tryItOut('PUTapi-v1-onboardingSequences-departments--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-onboardingSequences-departments--department_id-" onclick="cancelTryOut('PUTapi-v1-onboardingSequences-departments--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-onboardingSequences-departments--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/onboardingSequences/departments/{department_id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-onboardingSequences-departments--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-onboardingSequences-departments--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="PUTapi-v1-onboardingSequences-departments--department_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="department_id" data-endpoint="PUTapi-v1-onboardingSequences-departments--department_id-" data-component="query"  hidden>
<br>
Department ID</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>receive_reward</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-v1-onboardingSequences-departments--department_id-" hidden><input type="radio" name="receive_reward" value="true" data-endpoint="PUTapi-v1-onboardingSequences-departments--department_id-" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-v1-onboardingSequences-departments--department_id-" hidden><input type="radio" name="receive_reward" value="false" data-endpoint="PUTapi-v1-onboardingSequences-departments--department_id-" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<details>
<summary>
<b><code>onboardingSequence</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
The onboarding sequence object</summary>
<br>
<p>
<b><code>onboardingSequence.receive_reward</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-v1-onboardingSequences-departments--department_id-" hidden><input type="radio" name="onboardingSequence.receive_reward" value="true" data-endpoint="PUTapi-v1-onboardingSequences-departments--department_id-" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-v1-onboardingSequences-departments--department_id-" hidden><input type="radio" name="onboardingSequence.receive_reward" value="false" data-endpoint="PUTapi-v1-onboardingSequences-departments--department_id-" data-component="body" required ><code>false</code></label>
<br>
The receive reward parameter
of the onboarding sequence</p>
</details>
</p>

</form>


## Remove the specified onboarding sequence.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://helix4.com/api/v1/onboardingSequences/departments/nihil?department_id=8" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://helix4.com/api/v1/onboardingSequences/departments/nihil"
);

let params = {
    "department_id": "8",
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
 "message": "Deleted The Onboarding Sequence.",
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
<div id="execution-results-DELETEapi-v1-onboardingSequences-departments--department_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-onboardingSequences-departments--department_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-onboardingSequences-departments--department_id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-onboardingSequences-departments--department_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-onboardingSequences-departments--department_id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-onboardingSequences-departments--department_id-" data-method="DELETE" data-path="api/v1/onboardingSequences/departments/{department_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-onboardingSequences-departments--department_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-onboardingSequences-departments--department_id-" onclick="tryItOut('DELETEapi-v1-onboardingSequences-departments--department_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-onboardingSequences-departments--department_id-" onclick="cancelTryOut('DELETEapi-v1-onboardingSequences-departments--department_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-onboardingSequences-departments--department_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/onboardingSequences/departments/{department_id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-onboardingSequences-departments--department_id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-onboardingSequences-departments--department_id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="department_id" data-endpoint="DELETEapi-v1-onboardingSequences-departments--department_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>department_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="department_id" data-endpoint="DELETEapi-v1-onboardingSequences-departments--department_id-" data-component="query"  hidden>
<br>
Department ID</p>
</form>



